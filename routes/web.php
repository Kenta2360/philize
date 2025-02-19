<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BulletinBoardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\RegionController;
use App\Models\Information;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/home');
});

Auth::routes(['verify' => true]);


Route::post('/register', [RegisterController::class, 'register']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Information
Route::get('/information/index', [InformationController::class, 'index'])->name('information.index');
// Route::get("/information/category/{id}/{category}", [InformationController::class, 'selectIndex'])->name('information.select-index');
Route::get('/information/{id}/show', [InformationController::class, 'show'])->name('information.show');


//Bulletin Board
Route::get('/bulletin-board/index', [BulletinBoardController::class, 'index'])->name('board.index');
Route::get("/bulletin-board/category/{id}/{category}", [BulletinBoardController::class, 'selectIndex'])->name('board.select-index');
Route::get('/bulletin-board/{id}/show', [BulletinBoardController::class, 'show'])->name('board.show');

//Notice
Route::get('/notice/index', [NoticeController::class, 'index'])->name('notice.index');
Route::get('/notice/{id}/show', [NoticeController::class, 'show'])->name('notice.show');

//Contact
Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');





Route::group(['middleware' => ['auth', 'verified']], function(){

    //Bulletin Board
    Route::get('/bulletin-board/create', [BulletinBoardController::class, 'create'])->name('board.create');
    Route::post('/bulletin-board/store', [BulletinBoardController::class, 'store'])->name('bulletin.store');
    Route::post('/bulletin-board/comment/store', [BulletinBoardController::class, 'commentStore'])->name('comment.store');


    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function(){
        Route::get('/information', [InformationController::class, 'create'])->name('information.create');
        Route::post('/information/store', [InformationController::class, 'store'])->name('information.store');

        Route::get('/category', [CategoryController::class, 'index'])->name('category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

        Route::get('/region', [RegionController::class, 'index'])->name('region.create');
        Route::post('/region/store', [RegionController::class, 'store'])->name('region.store');

        Route::get('/notice/create', [NoticeController::class, 'create'])->name('notice.create');
        Route::post('/notice/store', [NoticeController::class, 'store'])->name('notice.store');
    });
});
