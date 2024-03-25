<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Mail\ForgotPassword;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;
use App\Mail\WelcomeMail;

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

// Route::get('/',function(){
//     echo "Home Page"; die;
// });

Route::get('/register', [HomeController::class, 'registerPage'])->name('register');
Route::post('/register', [HomeController::class, 'submit_register'])->name('submit_register');

Route::match(['get','post'],'/verify_email',[HomeController::class,'verfiy_email'])->name('verfiy_email');
Route::match(['get','post'],'/forgot_password',[HomeController::class,'forgot_password'])->name('forgot_password');
Route::match(['get','post'],'/reset_password/{token}',[HomeController::class,'reset_password'])->name('reset_password');
// Route::get('/login', [HomeController::class, 'loginPage'])->name('login');
// Route::get('/logout', [HomeController::class, 'logout'])->name('signout');
// Route::post('/postlogin', [HomeController::class, 'postlogin'])->name('postlogin');

Route::get('/', [FrontController::class, 'frontPage'])->name('dashboard');
// Route::middleware(['auth'])->group(function () {
//     Route::get('/blank', [HomeController::class, 'blank_page'])->name('blank_page');
// });

// Route::group(['prefix'=>'admin'],function(){

//     Route::group(['middleware'=>'admin.auth'],function(){
//         Route::get('/dashboard',[AdminHomeController::class,'index'])->name('admin.dashboard');
//         Route::get('/blank',[AdminHomeController::class,'blank_page'])->name('admin.blank');
//         Route::get('/logout',[AdminHomeController::class,'logout'])->name('admin.logout');
//     });

//     Route::group(['middleware'=>'admin.guest'],function(){
//         Route::get('/',[AdminLoginController::class,'index'])->name('admin.login');
//         Route::post('/authenticate',[AdminLoginController::class,'authenticate'])->name('admin.authenticate');
//     });

// });



Route::group(['middleware'=>'admin.auth'],function(){
    Route::get('/dashboard',[AdminHomeController::class,'index'])->name('admin.dashboard');
    Route::match(['get','post'],'/profile',[AdminHomeController::class,'profile'])->name('admin.profile');
    Route::get('/blank',[AdminHomeController::class,'blank_page'])->name('admin.blank');
    Route::get('/logout',[AdminHomeController::class,'logout'])->name('admin.logout');
});

Route::group(['middleware'=>'admin.guest'],function(){
    Route::get('/login',[AdminLoginController::class,'index'])->name('admin.login');
    Route::post('/authenticate',[AdminLoginController::class,'authenticate'])->name('admin.authenticate');
});


Route::get('/session',function(){
    // \Session::forget('verify_account_id');
    dd(\Session::all());
});


Route::get('/test_mail',function(){
    $data['token']=base64_encode("ahtesham@gmail.com");
    return (new WelcomeMail($data))->render($data);
});