<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

// TODO SEZIONE ARTICOLI
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/authors/{user}',[ArticleController::class, 'published'])->name('article.published');

Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/show/{article}',[ArticleController::class, 'show'], 'show')->name('article.show');
Route::get('/article//edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update');
Route::delete('/article/delete/{article}', [ArticleController::class, 'destroy'])->name('article.delete');
