<?php

use App\Livewire\Clocks as ClocksPage;
use App\Livewire\Post\Index as PostsPage;
use App\Livewire\Todo\Index as TodoPage;
use App\Livewire\Welcome as WelcomePage;
use Illuminate\Support\Facades\Route;

Route::get('clocks', ClocksPage::class)->name('page.clocks');
Route::get('posts', PostsPage::class)->name('page.posts');
Route::get('todo', TodoPage::class)->name('page.todo');
Route::get('welcome/{email}', WelcomePage ::class)->name('page.welcome');
