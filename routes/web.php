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

Route::get('/login', function () {
    return view('login_pages.log_in');
});

Route::get('/register', function () {
    return view('login_pages.register');
});

Route::get('/register_shop', function () {
    return view('login_pages.register_shop');
});

Route::get('/selection', function () {
    return view('login_pages.selection');
});

Route::get('/main', function () {
    return view('main_pages.main_screen');
});




Route::get('/log_in', [LoginController::class, 'showLoginForm'])->name('log_in_pages.log_in');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('log_in_pages.register');
Route::get('/register_shop', [RegisterShopController::class, 'showRegisterShopForm'])->name('log_in_pages.register_shop');



