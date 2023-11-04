<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () { return view('welcome');});
Route::get('/',[QuestionController::class, 'index'])->name('question.index');
Route::get('/question/create',[QuestionController::class, 'create'])->name('question.create');
Route::post('/question/create',[QuestionController::class, 'store'])->name('question.store');
Route::post('/',[QuestionController::class, 'vote'])->name('question.vote');
Route::get('/responder/{id}', [AnswerController::class, 'create'])->name('answer.create');
Route::post('/responder', [AnswerController::class, 'store'])->name('answer.store');
Route::get('/question/{id}', [QuestionController::class, 'show'])->name('question.show');


Route::get('/dashboard', function () { return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
