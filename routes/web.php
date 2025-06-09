<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'active.user'])->group(function () {
    Route::controller(\App\Http\Controllers\Users\DashboardController::class)
        ->prefix('dashboard')
        ->name('dashboard.')
        ->group(function () {
            Route::get('{user:mobile}', 'dashboard')->name('dashboard');
        });
});

