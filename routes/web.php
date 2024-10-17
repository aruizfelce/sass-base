<?php

use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('tenant.home');

/*Route::middleware(['OnlyCentralDomain'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
    
    Route::get('/register', [TenantController::class, 'showRegistrationForm'])->name('tenant.register');
    Route::post('/register', [TenantController::class, 'register']);
    Route::get('/registered/{domain}', [TenantController::class, 'registered'])->name('tenant.registered');
});*/


foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('welcome');
        
        Route::get('/register', [TenantController::class, 'showRegistrationForm'])->name('tenant.register');
        Route::post('/register', [TenantController::class, 'register']);
        Route::get('/registered/{domain}', [TenantController::class, 'registered'])->name('tenant.registered');
    });
}