<?php

namespace App\Http\Controllers;

use App\Models\Word;
use App\Services\OpenAIService;
use App\Services\SM2Algorithm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class LearningController extends Controller
{
    //
    public function show(){
        $user=Auth::user();
        // 
        $word=$user->words()->where("status","new")->where("definition","!=",null)->orderByDesc("repetition")->first();

        // Check if the word information already exists in the database
        if($word){
            return view("learning.show",["data"=>$word]);
        }

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

        Gate::authorize("learningStore",[Word::class,$word]);

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


    static function addData(Word $word){
        $data=self::chatgpt($word->word);
        $word->definition=$data["definition"];
        $word->part_of_speech=$data["part_of_speech"];
        $word->example=$data["example"];
        $word->save();

        return $data;
    }

    static function chatgpt($word){
        $ai=new OpenAIService();
        $wordData=$ai->getWordData($word);
        return $wordData;
    }
}
