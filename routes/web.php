<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[authController::class,'login'])->name('login');
Route::get('/register',[authController::class,'register']);
Route::post('/postregister',[authController::class,'postregister']);
Route::get('/logout',[authController::class,'logout'])->name('login');
Route::get('/home/profile', [homeController::class,'profile']);
Route::get('/home',      [homeController::class,'home']);
Route::post('/postlogin',[authController::class,'postlogin']);