<?php

use App\Http\Controllers\authController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [authController::class, 'view']);
Route::get('/register', [authController::class, 'registerview'])->name('register');
Route::Post('/register', [authController::class, 'creatuser'])->name('register');
Route::get('/login', function () {
    return view('components.login');
})->name('login');
Route::get('/users', [authController::class, 'users']);
