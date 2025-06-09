<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api')
    ->group(function () {

        Route::prefix('v1')
            ->group(function () {
                Route::controller(\App\Http\Controllers\Api\V1\Users\UserApiV1Controller::class)
                    ->group(function () {
                        Route::get('users', 'users');
                    });
            });

    });
