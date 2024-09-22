<?php

namespace App\Http\Controllers;

use App\Models\Word;
use App\Services\SM2Algorithm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LearningController extends Controller
{
    //
    public function show(){
        $user=Auth::user();
        $word=$user->words()->where("status","new")->orderByDesc("repetition")->first();

        if(!$word){
            return view("learning.noWords");
        }

        $data=$this->addData($word);
        $data["word"]=$word->word;
        return view("learning.show",["data"=>$data]);
    }
    public function store(Request $request,$word){
        $request->validate([
            "difficulty"=>"required|max:100"
        ]);

        $word=Auth::user()->words()->where("word",$word)->first();
        if(!$word){
            return abort(404);
        }

        $q=$request->difficulty;

        $sm2=new SM2Algorithm();
        if($q=="easy"){
            $nextReviewDate=$sm2->review(5);
        }
        elseif($q=="medium"){
            $nextReviewDate=$sm2->review(3);
        }
        else{
            $nextReviewDate=$sm2->review(0);
        }

        $word->sm2()->create([
            "repetitions"=>1,
            "next_review_date"=>$nextReviewDate,
            "last_review_date"=>$sm2->getLastReviewDate()
        ]);

        $word->status="learning";
        $word->save();
        return redirect(route("learning.show"));
    }


    private function addData(Word $word){
        $data=$this->chatgpt($word->word);
        $word->definition=$data["definition"];
        $word->part_of_speech=$data["part_of_speech"];
        $word->example=$data["example"];
        $word->save();

        return $data;
    }

    private function chatgpt($word){
        $wordData = [
            'definition' => 'to engage in an activity for fun or recreation',
            'part_of_speech' => 'verb',
            'example' => 'The children love to play outside.'
        ];
        return $wordData;
    }
}
