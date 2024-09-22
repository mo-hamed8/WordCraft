<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Word;
use Illuminate\Auth\Access\Response;

class WordPolicy
{

    public function learningstore(User $user,$word):bool{
        if($user->words()->where("word",$word)->first()){
            return true;
        }
        return false;
    }
    public function reviewShow(User $user,$word):bool{
        if($user->words()->where("word",$word)->first()){
            return true;
        }
        return false;
    }
    public function reviewStore(User $user,$word):bool{
        if($user->words()->where("word",$word)->first()){
            return true;
        }
        return false;
    }

    
}
