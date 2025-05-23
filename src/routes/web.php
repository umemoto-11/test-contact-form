<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [ContactController::class, 'index']);

Route::get('/confirm', [ContactController::class,'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);

Route::get('/thanks', [ContactController::class, 'store']);
Route::post('/thanks', [ContactController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin', [AdminController::class, 'search']);
