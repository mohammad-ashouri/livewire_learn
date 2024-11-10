<?php

use App\Livewire\Counter;
use App\Livewire\Event;
use App\Livewire\Export;
use App\Livewire\MagicActions;
use App\Livewire\TodoList;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('page.welcome');
Route::get('counter', Counter::class)->name('page.counter');
Route::get('export', Export::class)->name('page.export');
Route::get('event', Event::class)->name('page.event');
Route::get('magics', MagicActions::class)->name('page.magics');
Route::get('todo-list', TodoList::class)->name('page.todo-list');
