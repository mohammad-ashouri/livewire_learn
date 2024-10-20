<?php

use App\Livewire\Clocks as ClocksPage;
use App\Livewire\Post\Index as PostsPage;
use App\Livewire\Todo\Index as TodoPage;
use Illuminate\Support\Facades\Route;

Route::get('clocks', ClocksPage::class)->name('page.clocks');
Route::get('posts', PostsPage::class)->name('page.posts');
Route::get('todo', TodoPage::class)->name('page.todo');
