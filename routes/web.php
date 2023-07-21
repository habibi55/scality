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

Route::resource('/', UserController::class);
Route::resource('/home', MainController::class);
Route::get('/admin', [AdminController::class, 'login'])->name('admin.login');


