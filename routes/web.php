<?php

use App\Livewire\Clocks;
use Illuminate\Support\Facades\Route;

Route::get('clocks',Clocks::class)->name('clocks');
