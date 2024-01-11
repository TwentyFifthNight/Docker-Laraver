<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [GamesController::class,'index']);

Route::get('/games',[GamesController::class,'index'])->name('games');
Route::get('/show/{id}',[ReviewsController::class,'show'])->name('show');
Route::get('/home',[HomeController::class,'index'])->name('home');

Auth::routes();
Route::get('/change-password',[HomeController::class, 'changePassword'])->name('change-password');
Route::post('/change-password',[HomeController::class, 'updatePassword'])->name('update-password');
Route::get('/like/{id}',[ReviewsController::class,'like'])->name('like');
Route::post('/save/{id}',[ReviewsController::class,'save'])->name('save');
Route::get('/delete/{id}',[ReviewsController::class,'destroy'])->name('delete');
