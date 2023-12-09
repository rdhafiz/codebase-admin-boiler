<?php

use App\Http\Controllers\Cms\Api\AdminAuthApiController;
use App\Http\Middleware\AdminAuthApiCheck;
use App\Http\Middleware\AdminAuthApiReq;
use Illuminate\Support\Facades\Route;

// CMS Route
// ===================
Route::group(['prefix' => '/secure/administration/api'], function () {

    Route::group(['prefix' => '/auth', 'middleware' => [AdminAuthApiCheck::class]], function () {
        Route::post('/login', [AdminAuthApiController::class, 'login'])->name('CMS.api.login');
    });
    Route::group(['prefix' => '/auth', 'middleware' => [AdminAuthApiReq::class]], function () {
        Route::get('/logout', [AdminAuthApiController::class, 'logout'])->name('CMS.api.logout');
    });

});
