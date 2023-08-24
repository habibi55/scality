<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JadwalAbsenController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\EvaluatorController;
use App\Http\Controllers\PengurusController;
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



// Route::resource('/', LandingController::class);
Route::get('/login',function(){
return redirect('/');
});

Route::get('/',[LandingController::class,'loadLogin']);
Route::post('/login',[LandingController::class,'login'])->name('login');
Route::get('/logout',[LandingController::class,'logout'])->name('logout');

/* Pengurus Routes */
Route::group(['prefix' => 'pengurus','middleware'=>['web','isPengurus']],function(){
    Route::get('/home',[MainController::class,'home'])->name('home-pengurus');
    Route::get('/absen',[MainController::class,'absen'])->name('absen-pengurus');
    Route::post('/absen',[MainController::class,'storeAbsen'])->name('store-absen-pengurus');

    Route::get('/rapor',[MainController::class,'rapor'])->name('rapor-pengurus');
    Route::get('/profile',[MainController::class,'profile'])->name('profile-pengurus');
    Route::post('/profile/{user}',[MainController::class,'update'])->name('profile.update-pengurus');
    Route::put('/profile/{user}',[MainController::class,'update'])->name('profile.update-pengurus');

    // Route::get('/profile/update-password-form',[MainController::class,'updatePasswordForm'])->name('update-password-form-pengurus');
    // Route::post('/profile/update-password',[MainController::class,'update'])->name('update-password-pengurus');
    // Route::put('/profile/update-password',[MainController::class,'update'])->name('update-password-pengurus');

});

/* Evaluator Routes */
Route::group(['prefix' => 'evaluator','middleware'=>['web','isEvaluator']],function(){
    Route::get('/home',[MainController::class,'home'])->name('home-evaluator');
    Route::get('/absen',[MainController::class,'absen'])->name('absen-evaluator');
    Route::post('/absen',[MainController::class,'storeAbsen'])->name('store-absen-evaluator');
    Route::get('/rapor',[MainController::class,'rapor'])->name('rapor-evaluator');
    Route::get('/profile',[MainController::class,'profile'])->name('profile-evaluator');
    Route::get('/penilaian',[MainController::class,'penilaian'])->name('penilaian-evaluator');
    Route::post('/profile/{user}',[MainController::class,'update'])->name('profile.update-evaluator');
    Route::put('/profile/{user}',[MainController::class,'update'])->name('profile.update-evaluator');

    // Route::get('/profile/update-password-form',[MainController::class,'updatePasswordForm'])->name('update-password-form-evaluator');
    // Route::post('/profile/update-password',[MainController::class,'updatePassword'])->name('update-password-evaluator');

});


/* Admin Routes */
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/home',[MainController::class,'home'])->name('home-admin');
    Route::get('/absen',[MainController::class,'absen'])->name('absen-admin');
    Route::post('/absen',[MainController::class,'storeAbsen'])->name('store-absen-admin');
    Route::get('/rapor',[MainController::class,'rapor'])->name('rapor-admin');
    Route::get('/penilaian',[MainController::class,'penilaian'])->name('penilaian-admin');
    Route::get('/penilaian-store',[MainController::class,'storePenilaian'])->name('store-penilaian-admin');

    Route::get('/profile',[MainController::class,'profile'])->name('profile-admin');
    Route::post('/profile/{user}',[MainController::class,'update'])->name('profile.update-admin');
    Route::put('/profile/{user}',[MainController::class,'update'])->name('profile.update-admin');


    Route::get('/jadwal-absen',[AdminController::class,'jadwalAbsen'])->name('jadwal-absen');
    Route::get('/tambah-jadwal-absen',[AdminController::class,'tambahJadwalAbsen'])->name('tambah-jadwal-absen');
    Route::post('/tambah-jadwal-absen',[AdminController::class,'storeJadwalAbsen'])->name('store-jadwal-absen');
    Route::get('/data-pengurus',[AdminController::class,'dataPengurus'])->name('data-pengurus');
    Route::get('/tambah-pengurus',[AdminController::class,'tambahPengurus'])->name('tambah-pengurus');
    Route::post('/tambah-pengurus-store',[AdminController::class,'store'])->name('tambah-pengurus-store');
    Route::post('/delete-pengurus-destroy/{id}',[AdminController::class,'destroy'])->name('delete-pengurus-destroy');
    Route::delete('/delete-pengurus-destroy/{id}',[AdminController::class,'destroy'])->name('delete-pengurus-destroy');
    Route::get('/edit-pengurus/{id}', [AdminController::class,'edit'])->name('pengurus.edit');
    Route::put('/edit-pengurus/{id}', [AdminController::class,'update'])->name('pengurus.update');
});


