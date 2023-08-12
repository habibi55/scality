<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EvaluatorController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::resource('/', LandingController::class);
Route::get('/login',function(){
    return redirect('/');
});

Route::get('/',[LandingController::class,'loadLogin']);
Route::post('/login',[LandingController::class,'login'])->name('login');
Route::get('/logout',[LandingController::class,'logout'])->name('logout');

/* Pengurus Routes */
Route::group(['prefix' => 'pengurus','middleware'=>['web','isPengurus']],function(){
    Route::get('/home',[MainController::class,'home'])->name('home');
    Route::get('/profile',[MainController::class,'profile'])->name('profile');
    Route::post('/profile/{user}',[MainController::class,'update'])->name('profile.update');
    Route::put('/profile/{user}',[MainController::class,'update'])->name('profile.update');

});

/* Evaluator Routes */
Route::group(['prefix' => 'evaluator','middleware'=>['web','isEvaluator']],function(){
    Route::get('/home',[MainController::class,'home'])->name('home');
    Route::get('/profile',[MainController::class,'profile'])->name('profile');
    Route::post('/profile/{user}',[MainController::class,'update'])->name('profile.update');
    Route::put('/profile/{user}',[MainController::class,'update'])->name('profile.update');

});


/* Admin Routes */
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/home',[MainController::class,'home'])->name('home');
    Route::get('/profile',[MainController::class,'profile'])->name('profile');
    Route::post('/profile/{user}',[MainController::class,'update'])->name('profile.update');
    Route::put('/profile/{user}',[MainController::class,'update'])->name('profile.update');


    Route::get('/data-pengurus',[AdminController::class,'dataPengurus'])->name('data-pengurus');
    Route::get('/tambah-pengurus',[AdminController::class,'tambahPengurus'])->name('tambah-pengurus');
    Route::post('/tambah-pengurus-store',[AdminController::class,'store'])->name('tambah-pengurus-store');
    Route::get('/edit-pengurus/{id}', [AdminController::class,'edit'])->name('pengurus.edit');
    Route::put('/edit-pengurus/{id}', [AdminController::class,'update'])->name('pengurus.update');



});


