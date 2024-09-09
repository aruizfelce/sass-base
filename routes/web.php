<?php

use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [TenantController::class, 'showRegistrationForm'])->name('tenant.register');
Route::post('/register', [TenantController::class, 'register']);
Route::get('/registered/{domain}', [TenantController::class, 'registered'])->name('tenant.registered');
