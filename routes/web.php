<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticated;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminAuthenticated;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\UnAuthenticated;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [HomeController::class, 'index']);

Route::get('/category/{kategori}/{slug}', [CategoryController::class, 'searchBySlug']);
Route::get('/category/{kategori}', [CategoryController::class, 'indexCategory']);

Route::middleware([UnAuthenticated::class])->group(function () {
    Route::get('login', [DashboardController::class, 'showLogin']);
    Route::post('login', [DashboardController::class, 'Authenticated']);
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/forgot_password', function () {
    return view('forgot_password');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/about', function () {
    return view('about');
});


Route::middleware([Authenticated::class])->group(function () {

    Route::post('/logout', [DashboardController::class, 'logout']);


    Route::middleware([AdminAuthenticated::class])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'showDashboard']);

        Route::get('/dashboard/add', [DashboardController::class, 'showAddNew']);
        Route::post('/dashboard/add', [DashboardController::class, 'addNews']);
        Route::get('/dashboard/edit/{id}', [DashboardController::class, 'showEditNew']);
        Route::post('/dashboard/edit/{id}', [DashboardController::class, 'editNew']);
        Route::post('/dashboard/delete', [DashboardController::class, 'deleteNew']);
    });
});
