<?php

use App\Livewire\ArticlesPage;
use App\Livewire\SupportedTypesPage as SupportedTypesPage;
use App\Livewire\TodoPage as TodoPage;
use Illuminate\Support\Facades\Route;

Route::get('', ArticlesPage::class)->name('page.articles');
Route::get('todo', TodoPage::class)->name('page.todo');
Route::get('supported-types', SupportedTypesPage::class)->name('page.supported-types');
