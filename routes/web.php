<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Route::middleware(['active.user'])->group(function () {
Route::controller(\App\Http\Controllers\Users\DashboardController::class)
    ->prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {
        Route::get('{user:mobile}', 'dashboard')->name('dashboard');
    });


Route::middleware(['time.access'])->group(function () {
    Route::get('restricted-area', function () {
        return 'این بخش فقط در ساعات مشخص قابل دسترسی است';
    });
});

