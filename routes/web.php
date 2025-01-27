<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/information', function () {
    return view('information');
});
Route::get('/information-detail', function () {
    return view('information-detail');
});
Route::get('/bulletin-board', function () {
    return view('bulletin-board');
});
Route::get('/board-detail', function () {
    return view('board-detail');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
