<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\TrainingPageController;
use App\Http\Controllers\Frontend\ResourcesPageController;
use App\Http\Controllers\Frontend\InternationalCandidatesPageController;
use App\Http\Controllers\Frontend\AboutPageController;
use App\Http\Controllers\Frontend\ContactPageController;
use App\Http\Controllers\Frontend\JobsPageController;
use App\Http\Controllers\Frontend\ApplyController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Middleware\UserAuthCheck;
use App\Http\Middleware\UserAuthReq;

include_once 'cms.php';
include_once 'rcp.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {return view("welcome");});

Route::get('/', [HomePageController::class, "viewPage"])->name('home');
Route::get('osce-training', [TrainingPageController::class, "viewPage"])->name('osce');
Route::get('resources', [ResourcesPageController::class, "viewPage"])->name('resources');
Route::get('international-candidates', [InternationalCandidatesPageController::class, "ViewPage"])->name('international-candidates');
Route::get('about', [AboutPageController::class, "ViewPage"])->name('about-us');
Route::get('contact', [ContactPageController::class, "ViewPage"])->name('contact-us');
Route::get('jobs', [JobsPageController::class, "ViewPage"])->name('jobs');


// User Authentication
Route::group(['middleware' => [UserAuthCheck::class]], function () {
    Route::get('/login', [AuthController::class, "login"])->name('front.login');
    Route::post('/login', [AuthController::class, "loginAction"])->name('front.login.action');
    Route::get('/register', [AuthController::class, "register"])->name('front.register');
    Route::post('/register', [AuthController::class, "registerAction"])->name('front.register.action');
    Route::get('/forgot-password', [AuthController::class, "forgot"])->name('front.forgot');
    Route::post('/forgot-password', [AuthController::class, "forgotAction"])->name('front.forgot.action');
    Route::get('/reset-password', [AuthController::class, "reset"])->name('front.reset');
    Route::post('/reset-password', [AuthController::class, "resetAction"])->name('front.reset.action');
});
// User Profile
Route::group(['middleware' => [UserAuthReq::class]], function () {
    Route::get('/logout', [AuthController::class, "logout"])->name('front.logout');

    Route::get('/profile', [ProfileController::class, "profile"])->name('front.profile');
    Route::get('/profile/update', [ProfileController::class, "profileUpdate"])->name('front.profile.update');
    Route::post('/profile/update', [ProfileController::class, "profileUpdateAction"])->name('front.profile.update.action');
    Route::get('/profile/update/password', [ProfileController::class, "profileUpdatePassword"])->name('front.profile.update.password');
    Route::post('/profile/update/password', [ProfileController::class, "profileUpdatePasswordAction"])->name('front.profile.update.password.action');

    Route::get('/training', [ProfileController::class, "training"])->name('front.training');
});

// Apply Course
Route::get('/apply', [ApplyController::class, "index"])->name('front.apply');
Route::post('/apply', [ApplyController::class, "apply"])->name('front.apply.action');
