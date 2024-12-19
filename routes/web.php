<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\RorrowController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Book */
Route::get('okee',[BookController::class, 'index'])->name('index.book');

/* Reader */
Route::get('oke',[ReaderController::class, 'index'])->name('index.reader');

/* Borrows */
Route::get('okeee',[RorrowController::class, 'index'])->name('index.rorrow');
