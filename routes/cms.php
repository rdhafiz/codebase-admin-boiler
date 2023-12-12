<?php

// Import necessary classes and namespaces
use App\Http\Controllers\Cms\FrontController;
use App\Http\Controllers\Cms\PageController;
use App\Http\Controllers\Cms\RecruiterController;
use App\Http\Middleware\AdminAuthCheck;
use App\Http\Middleware\AdminAuthReq;
use Illuminate\Support\Facades\Route;

// Define routes within a group with a specific prefix
Route::group(['prefix' => '/secure/administration'], function () {

    // Redirect the root URL to the login route
    Route::get('/', function () {
        return redirect()->route('CMS.login');
    })->name('CMS.home');

    // Group of routes with middleware for admin authentication check and a sub-prefix
    Route::group(['middleware' => [AdminAuthCheck::class], 'prefix' => '/auth'], function () {
        // Login route within the 'auth' group
        Route::get('/', [FrontController::class, 'index'])->name('CMS.login');
    });

    // Group of routes with middleware for admin authentication requirement
    Route::group(['middleware' => [AdminAuthReq::class]], function () {
        // Dashboard route accessible only to authenticated admins
        Route::get('/dashboard', [FrontController::class, 'dashboard'])->name('CMS.dashboard');

        // Resourceful routes for 'page' with alias 'CMS'
        Route::resource('page', PageController::class, ['as' => 'CMS']);

        // Resourceful routes for 'recruiter' with alias 'CMS'
        Route::resource('recruiter', RecruiterController::class, ['as' => 'CMS']);
    });

});
