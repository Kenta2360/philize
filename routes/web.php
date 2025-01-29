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
Route::get('/notice-board', function () {
    return view('notice-board');
});
Route::get('/notice-detail', function () {
    return view('notice-detail');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contact-complete', function () {
    return view('contact-complete');
});
Route::get('/create-board', function () {
    return view('create-board');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
