<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;

Route::view('/', 'welcome')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('my-service', [ServiceController::class, 'service'])->name('user_service');
    Route::post('my-service', [ServiceController::class, 'request_service'])->name('request_service');
});

// authentication
Route::controller(AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/register', 'register')->name('register');
        Route::post('/store', 'store')->name('auth.store');
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate')->name('auth.authenticate');
    });
    Route::get('/logout', 'logout')->name('auth.logout')->middleware('auth');
});
