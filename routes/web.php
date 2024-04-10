<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('layout', 'layout')->name('layout');
Route::get('/nova-pergunta', \App\Livewire\Question\Create::class)->name('question.create');
Route::get('/perguntas', \App\Livewire\Question\Index::class)->name('question.index');

Route::get('/respostas', \App\Livewire\Answer\Index::class)->name('answer.index');
Route::get('/responder', \App\Livewire\Answer\Create::class)->name('answer.create');


//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::post('logout', function (\App\Livewire\Actions\Logout $logout) {
    $logout();
    return redirect('/');
})
    ->middleware('auth')
    ->name('logout');


require __DIR__.'/auth.php';
