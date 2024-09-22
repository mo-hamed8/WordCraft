<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WordController extends Controller
{
    //
    public function create(){
        return view("Word.create");
    }

    public function store(Request $request){
        $user=Auth::user();

        $request->validate([
            "text"=>"required"
        ]);
        $words=$this->processWords($request->text);

        $wordsWithCount = array_count_values($words);

        foreach($wordsWithCount as $key=>$value){
            $word=$user->words()->where("word",$key)->first();
            if($word){
                $word->repetition=$word->repetition+$value;
                $word->save();
            }
            else{
                $user->words()->create(["word"=>$key,"repetition"=>$value]);
            }
        }


        // Remove duplicate words
        $words = array_unique($words);

        return redirect(route("words.create"));
    }

    private function processWords($text): array {
        // Convert the text to lowercase for consistency
        $text = strtolower($text);
    
        // Remove punctuation and special characters using a regular expression
        $text = preg_replace("/[^\w\s]/u", " ", $text);
    
        // Split the text into an array of words based on whitespace
        $words = preg_split("/\s+/", $text);


        // Delete empty items
        $words = array_filter($words);
    
        // Return the array of words
        return $words;
    
    }
}
