<?php

use App\Http\Controllers\Cms\FrontController;
use App\Http\Middleware\AdminAuthCheck;
use App\Http\Middleware\AdminAuthReq;
use Illuminate\Support\Facades\Route;

// CMS Route
// ===================
Route::group(['prefix' => '/secure/administration'], function (){

    Route::get('/', function (){ return redirect()->route('CMS.login'); } )->name('CMS.home');
    Route::group(['middleware' => [AdminAuthCheck::class],'prefix' => '/auth'], function (){
        Route::get('/', [FrontController::class, 'index'])->name('CMS.login');
    });

    Route::group(['middleware' => [AdminAuthReq::class]], function (){
        Route::get('/dashboard', [FrontController::class, 'dashboard'])->name('CMS.dashboard');
    });

});
