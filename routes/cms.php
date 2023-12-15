<?php

// Import necessary classes and namespaces
use App\Http\Controllers\Cms\Api\AdminAuthApiController;
use App\Http\Controllers\Cms\CourseController;
use App\Http\Controllers\Cms\CourseCategoryController;
use App\Http\Controllers\Cms\CourseScheduleController;
use App\Http\Controllers\Cms\CourseTypeController;
use App\Http\Controllers\Cms\FrontController;
use App\Http\Controllers\Cms\PageController;
use App\Http\Controllers\Cms\RecruiterController;
use App\Http\Middleware\AdminAuthCheck;
use App\Http\Middleware\AdminAuthReq;
use App\Http\Middleware\AdminAuthApiCheck;
use App\Http\Middleware\AdminAuthApiReq;
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

        // Resourceful routes for 'course category' with alias 'CMS'
        Route::resource('course/category', CourseCategoryController::class, ['as' => 'CMS.course']);
        // Resourceful routes for 'course type' with alias 'CMS'
        Route::resource('course/type', CourseTypeController::class, ['as' => 'CMS.course']);
        // Resourceful routes for 'course' with alias 'CMS'
        Route::resource('course', CourseController::class, ['as' => 'CMS']);

        // Resourceful routes for 'recruiter' with alias 'CMS'
        Route::resource('recruiter', RecruiterController::class, ['as' => 'CMS']);
    });

});









// CMS REST API Route
// ===================
Route::group(['prefix' => '/secure/administration/api'], function () {

    Route::group(['prefix' => '/auth', 'middleware' => [AdminAuthApiCheck::class]], function () {
        Route::post('/login', [AdminAuthApiController::class, 'login'])->name('CMS.api.login');
    });
    Route::group(['prefix' => '/auth', 'middleware' => [AdminAuthApiReq::class]], function () {
        Route::get('/logout', [AdminAuthApiController::class, 'logout'])->name('CMS.api.logout');
    });

});
