<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    //
    public function create(){
        return view("Word.create");
    }

    public function store(){
        return "you are in store function";
    }
}
