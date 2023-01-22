<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\indexController;
use Faker\Guesser\Name;
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


Route::get('/', [AuthController::class, 'view'])->name('home');
Route::get('/register',[AuthController::class, 'registerview'])->name('registerview');
Route::Post('/register', [AuthController::class, 'creatuser'])->name('register');
Route::get('/login' ,[AuthController::class,'loginview'])->name('login');
Route::post('/login' ,[AuthController::class,'Authenticate'])->name('login');

Route::get('/users', [AuthController::class, 'users'])->name('users')->middleware('auth');
Route::get('/data', [indexController::class, 'index']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
