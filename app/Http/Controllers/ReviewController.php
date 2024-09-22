<?php

namespace App\Http\Controllers;

use App\Services\SM2Algorithm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        $words = $user->words()->where("status", "learning")->with("sm2")->get();
        $words = $words->filter(function ($word) {
            return $word->sm2 && $word->sm2->next_review_date <= Carbon::today()->toDateString();
        });
        return view("review.index", ["words" => $words]);
    }
    public function show($word){
        $user = Auth::user();
        $word = $user->words()->where("word", $word)->first();
        if ($word) {
            return view("review.show", ["data" => $word]);
        } else {
            return abort(404);
        }
    }
    public function store(Request $request, $word){
        $request->validate([
            "difficulty" => "required|max:100"
        ]);

        $user = Auth::user();
        $word = $user->words()->where("word", $word)->with("sm2")->first();
        if (!$word) {
            return abort(404);
        } 

        $q = $request->difficulty;
        $interval = $word->sm2->interval;
        $ef = $word->sm2->ef;
        $repetitions = $word->sm2->repetitions;
        $lastReviewDate = $word->sm2->last_review_date;

        $sm2 = new SM2Algorithm($interval, $ef, $repetitions, $lastReviewDate);
        if ($q == "easy") {
            $sm2->review(5);
        } elseif ($q == "medium") {
            $sm2->review(3);
        } else {
            $sm2->review(0);
        }

        $word->sm2->update([
            "repetitions" => $word->sm2->repetitions + 1,
            "interval" => $sm2->getInterval(),
            "ef" => $sm2->getEF(),
            "next_review_date" => $sm2->getNextReviewDate(),
            "last_review_date" => $sm2->getLastReviewDate()
        ]);


        return redirect(route("review.index"))->with(["message" => "Your progress is truly inspiring—keep it going!"]);
    }
}
