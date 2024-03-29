<?php

// Import necessary classes and namespaces
use App\Http\Controllers\Rcp\Api\RcpAuthApiController;
use App\Http\Controllers\Rcp\FrontController;
use App\Http\Controllers\Rcp\JobController;
use App\Http\Controllers\Rcp\ProfileController;
use App\Http\Middleware\RcpAuthApiCheck;
use App\Http\Middleware\RcpAuthApiReq;
use App\Http\Middleware\RcpAuthCheck;
use App\Http\Middleware\RcpAuthReq;
use Illuminate\Support\Facades\Route;

// Define routes within a group with a specific prefix
Route::group(['prefix' => '/recruiter/portal'], function () {

    // Redirect the root URL to the login route
    Route::get('/', function () {
        return redirect()->route('RCP.login');
    })->name('RCP.home');

    // Group of routes with middleware for admin authentication check and a sub-prefix
    Route::group(['middleware' => [RcpAuthCheck::class], 'prefix' => '/auth'], function () {
        // Login route within the 'auth' group
        Route::get('/', [FrontController::class, 'index'])->name('RCP.login');
    });

    // Group of routes with middleware for admin authentication requirement
    Route::group(['middleware' => [RcpAuthReq::class]], function () {
        // Dashboard route accessible only to authenticated admins
        Route::get('/dashboard', [FrontController::class, 'dashboard'])->name('RCP.dashboard');

        // Profile route accessible only to authenticated admins
        Route::get('/profile', [ProfileController::class, 'profile'])->name('RCP.profile');
        Route::get('/profile/update', [ProfileController::class, 'profileUpdate'])->name('RCP.profile.update');
        Route::put('/profile/update', [ProfileController::class, 'profileUpdateAction'])->name('RCP.profile.update.action');
        Route::get('/profile/update/password', [ProfileController::class, 'profileUpdatePassword'])->name('RCP.profile.update.password');
        Route::put('/profile/update/password', [ProfileController::class, 'profileUpdatePasswordAction'])->name('RCP.profile.update.password.action');

        // Resourceful routes for 'job' with alias 'RCP'
        Route::resource('job', JobController::class, ['as' => 'RCP']);
        Route::get('job/{id}/applications', [JobController::class, "applications"])->name('RCP.job.applications');
    });

});









// RCP REST API Route
// ===================
Route::group(['prefix' => '/recruiter/portal/api'], function () {

    Route::group(['prefix' => '/auth', 'middleware' => [RcpAuthApiCheck::class]], function () {
        Route::post('/login', [RcpAuthApiController::class, 'login'])->name('RCP.api.login');
    });
    Route::group(['prefix' => '/auth', 'middleware' => [RcpAuthApiReq::class]], function () {
        Route::get('/logout', [RcpAuthApiController::class, 'logout'])->name('RCP.api.logout');
    });

});
