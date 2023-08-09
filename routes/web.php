<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IntroController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
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

// Route::get('home' ,[UserController::class, 'home'])->middleware('auth')->name('home');
// Route::post('/postlogin',[UserController::class, 'postlogin'])->name('postlogin');

Route::resource('/', MainController::class);
Route::get('/login',function(){
    return redirect('/');
});

Route::get('/',[MainController::class,'loadLogin']);
Route::post('/login',[MainController::class,'login'])->name('login');
Route::get('/logout',[MainController::class,'logout'])->name('logout');

/* Pengurus Routes */


/* Evaluator Routes */



/* Admin Routes */
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/home',[AdminController::class,'home']);

    // Route::get('/users',[SuperAdminController::class,'users'])->name('superAdminUsers');
    // Route::get('/manage-role',[SuperAdminController::class,'manageRole'])->name('manageRole');
    // Route::post('/update-role',[SuperAdminController::class,'updateRole'])->name('updateRole');
});


