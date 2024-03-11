<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterShopController;

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
    return view('principal');
});



Route::get('/log-in', [LoginController::class, 'showLoginForm'])->name('log-in');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::get('/register_shop', [RegisterShopController::class, 'showRegisterShopForm'])->name('register_shop');



