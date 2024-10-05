<?php

namespace App\Jobs;

use App\Http\Controllers\LearningController;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AdWordsInfo implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    
    public function __construct(private User $user)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //count number of need words
        $numWords=$this->user->words()->where("status","new")->where("definition","!=",null)->count();
        logger()->info($numWords);
        for($i=$numWords;$i<10;$i++){
            $word=$this->user->words()->where("status","new")->where("definition",null)->orderByDesc("repetition")->first();
            if($word){
                LearningController::addData($word);
                logger()->info("word:".$word->word);
            }
        }
    }
}
