<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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
Route::get('/register', [HomeController::class, 'registerPage'])->name('register');
Route::post('/register', [HomeController::class, 'submit_register'])->name('submit_register');
Route::get('/login', [HomeController::class, 'loginPage'])->name('login');
Route::get('/logout', [HomeController::class, 'logout'])->name('signout');
Route::post('/postlogin', [HomeController::class, 'postlogin'])->name('postlogin');

Route::get('/', [DashboardController::class, 'dashboardPage'])->name('dashboard');
Route::middleware(['auth'])->group(function () {
    Route::get('/blank', [HomeController::class, 'blank_page'])->name('blank_page');
});