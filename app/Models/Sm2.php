<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sm2 extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function word(){
        return $this->belongsTo(Word::class);
    }
}
