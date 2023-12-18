<?php

// Import necessary classes and namespaces
use App\Http\Controllers\Cms\Api\AdminAuthApiController;
use App\Http\Controllers\Cms\AdminUserController;
use App\Http\Controllers\Cms\CourseController;
use App\Http\Controllers\Cms\CourseCategoryController;
use App\Http\Controllers\Cms\TrainerController;
use App\Http\Controllers\Cms\CourseTypeController;
use App\Http\Controllers\Cms\FrontController;
use App\Http\Controllers\Cms\PageController;
use App\Http\Controllers\Cms\ProfileController;
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

        // Profile route accessible only to authenticated admins
        Route::get('/profile', [ProfileController::class, 'profile'])->name('CMS.profile');
        Route::get('/profile/update', [ProfileController::class, 'profileUpdate'])->name('CMS.profile.update');
        Route::put('/profile/update', [ProfileController::class, 'profileUpdateAction'])->name('CMS.profile.update.action');
        Route::get('/profile/update/password', [ProfileController::class, 'profileUpdatePassword'])->name('CMS.profile.update.password');
        Route::put('/profile/update/password', [ProfileController::class, 'profileUpdatePasswordAction'])->name('CMS.profile.update.password.action');

        // Resourceful routes for 'page' with alias 'CMS'
        Route::resource('page', PageController::class, ['as' => 'CMS'])->middleware(['AdminPermissionReq:super']);

        // Resourceful routes for 'trainer' with alias 'CMS'
        Route::resource('trainer', TrainerController::class, ['as' => 'CMS'])->middleware(['AdminPermissionReq:super']);

        // Resourceful routes for 'course category' with alias 'CMS'
        Route::resource('course/category', CourseCategoryController::class, ['as' => 'CMS.course'])->middleware(['AdminPermissionReq:super,course']);
        // Resourceful routes for 'course type' with alias 'CMS'
        Route::resource('course/type', CourseTypeController::class, ['as' => 'CMS.course'])->middleware(['AdminPermissionReq:super,course']);
        // Resourceful routes for 'course' with alias 'CMS'
        Route::resource('course', CourseController::class, ['as' => 'CMS'])->middleware(['AdminPermissionReq:super,course']);

        // Resourceful routes for 'recruiter' with alias 'CMS'
        Route::resource('recruiter', RecruiterController::class, ['as' => 'CMS'])->middleware(['AdminPermissionReq:super']);

        // Resourceful routes for 'admin' with alias 'CMS'
        Route::resource('admin', AdminUserController::class, ['as' => 'CMS'])->middleware(['AdminPermissionReq:super']);
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
