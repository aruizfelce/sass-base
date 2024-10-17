<?php

declare(strict_types=1);

use App\Http\Controllers\Tenant\DashboardController;
use App\Http\Controllers\Tenant\OnboardingController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyBySubdomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        $domain = tenant('domains')[0]->domain;
        return view('tenant.welcome', compact('domain'));
    });
    Route::get('/onboarding', [OnboardingController::class, 'show'])->name('tenant.onboarding');
    Route::post('/onboarding', [OnboardingController::class, 'store'])->name('tenant.onboarding.store');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('tenant.dashboard');

    Auth::routes([
        'register' => false, // Desactiva la ruta de registro
    ]);
});
