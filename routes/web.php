<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsletterController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CustomAuthCheck;
use Illuminate\Support\Facades\Route;

// صفحه اصلی
Route::get('/', function () {
    return view('main.main');
})->name('main');

// عضویت در خبرنامه
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// صفحات عمومی
Route::prefix('page')->group(function () {
    Route::view('/services', 'page.services')->name('services');
    Route::view('/swimminglessons', 'page.swimminglessons')->name('swimminglessons');
    Route::view('/gallery', 'page.gallery')->name('gallery');
    Route::view('/contact', 'page.contact')->name('contact');
});

// احراز هویت (برای کاربران مهمان)
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

// مسیرهای کاربر لاگین‌شده
Route::middleware(CustomAuthCheck::class)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/buyticket', function () {
        return view('main.buyticket');
    })->name('buyticket');
});

// بلاگ برای عموم
Route::get('/blog', [ArticleController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [ArticleController::class, 'show'])->name('blog.show');

// مسیرهای مدیریت (Admin)
Route::middleware(AdminMiddleware::class)->group(function () {

    Route::get('/admindashboard', function () {
        return view('admin.admindashboard');
    })->name('admindashboard');

    Route::prefix('admin/articles')->name('admin.articles.')->group(function () {
        Route::get('/', [ArticleController::class, 'adminIndex'])->name('index');
        Route::get('/create', [ArticleController::class, 'create'])->name('create');
        Route::post('/', [ArticleController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [ArticleController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ArticleController::class, 'update'])->name('update');
        Route::delete('/{id}', [ArticleController::class, 'destroy'])->name('destroy');
    });

});
