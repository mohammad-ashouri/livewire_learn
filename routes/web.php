<?php

use App\Livewire\ArticlesPage;
use App\Livewire\SupportedTypesPage as SupportedTypesPage;
use App\Livewire\TodoPage as TodoPage;
use App\Livewire\Typer;
use Illuminate\Support\Facades\Route;

Route::get('', ArticlesPage::class)->name('page.articles');
Route::get('todo', TodoPage::class)->name('page.todo');
Route::get('supported-types', SupportedTypesPage::class)->name('page.supported-types');
Route::get('typer',Typer::class)->name('page.typer');
