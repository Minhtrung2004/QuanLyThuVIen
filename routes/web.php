<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\RorrowController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Book */
Route::get('okee',[BookController::class, 'index'])->name('index.book');
Route::get('create',[BookController::class, 'create'])->name('create.book');
Route::post('create',[BookController::class, 'store'])->name('store.book');
Route::delete('/books{id}',[BookController::class, 'destroy'])->name('destroy.book');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('edit.book');
Route::put('/books/{id}', [BookController::class, 'update'])->name('update.book');

/* Reader */
Route::get('oke',[ReaderController::class, 'index'])->name('index.reader');

/* Borrows */
Route::get('okeee',[RorrowController::class, 'index'])->name('index.rorrow');

/*Login*/
