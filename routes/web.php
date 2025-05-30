<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsletterController;
use App\Http\Middleware\CustomAuthCheck;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main.main');
})->name('main');



Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::middleware('guest')->group(function(){
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware(CustomAuthCheck::class)->group(function(){
    Route::get('/dashboard',[DashboardController::class,'show'])->middleware('auth')->name('dashboard');
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');

    Route::get('buyticket',function(){
        return view('main.buyticket');
    })->name('buyticket');
});



