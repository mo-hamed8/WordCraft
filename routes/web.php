<?php

use App\Http\Controllers\LearningController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WordController;
use App\Services\OpenAIService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get("words/create",[WordController::class,"create"])->name("words.create");
    Route::post("words",[WordController::class,"store"])->name("words.store");

    Route::post("learning/{word}",[LearningController::class,"store"])->name("learning.store");
    Route::get("learning",[LearningController::class,"show"])->name("learning.show");

    Route::get("reviews",[ReviewController::class,"index"])->name("review.index");
    Route::get("reviews/{word}",[ReviewController::class,"show"])->name("review.show");
    Route::post("reviews/{word}",[ReviewController::class,"store"])->name("review.store");
});

require __DIR__.'/auth.php';
