<?php

use App\Livewire\Books\Book;
use App\Livewire\Books\BookAdd;
use App\Livewire\Books\EditBook;
use App\Livewire\Category\Category;
use App\Livewire\Category\CategoryAdd;
use App\Livewire\Category\CategoryEdit;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

// Routes for different pages
Route::get('/', Home::class);

//Routes for the books
Route::get('/book', Book::class)->name('Book');
Route::get('/book/add', BookAdd::class)->name('BookAdd');
Route::get('/book/edit/{id}', EditBook::class)->name('BookEdit');

//Routes for the Category
Route::get('/categories', Category::class)->name('Category');
Route::get('/categories/add', CategoryAdd::class)->name('CategoryAdd');
Route::get('/categories/edit/{id}', CategoryEdit::class)->name('CategoryEdit');