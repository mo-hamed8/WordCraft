<?php

namespace App\Console\Commands;

use App\Jobs\AdWordsInfo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckUserNeedWordsInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-user-need-words-info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        //
        // جلب جميع المستخدمين الذين لديهم أقل من 10 كلمات ذات الحالة "new" وتعريف غير فارغ
        $users = User::whereHas('words', function ($query) {
            $query->where('status', 'new')
                  ->where('definition', '!=', null);
        })
        ->get();

        $this->info(Carbon::now()."====== users:".count($users));

        $filteredUsers = $users->filter(function ($user) {
            return $user->words()->where('status', 'new')->where('definition', '!=', null)->count() < 10;
        });

        foreach ($filteredUsers as $user) {
            AdWordsInfo::dispatch($user);
            // $this->info("User IjD: {$user->id}, Name: {$user->name}, Words Count: " . $user->words()->where('status', 'new')->where('definition', '!=', null)->count());
        }
    
    }
}
