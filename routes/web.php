<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('livewire.counter');
//});
Route::get('', Counter::class)->name('counter');
