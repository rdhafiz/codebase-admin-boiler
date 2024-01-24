<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\TrainingPageController;
use App\Http\Controllers\Frontend\StripePaymentController;
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
Route::get('about', [AboutPageController::class, "viewPage"])->name('about-us');
Route::get('contact', [ContactPageController::class, "viewPage"])->name('contact-us');
Route::post('contact/submit', [ContactPageController::class, "submit_contact"])->name('submit-contact');
Route::get('jobs', [JobsPageController::class, "viewPage"])->name('jobs');
Route::post('job/search', [JobsPageController::class, "job_search"])->name('job.search');
Route::get('job/{id}', [JobsPageController::class, "job_details"])->name('job.details');
Route::get('job/{id}/apply', [JobsPageController::class, "job_apply"])->name('job.apply')->middleware(UserAuthReq::class);
//OSCE Pages
Route::group(['prefix' => 'training'], function() {
    Route::get('osce', [TrainingPageController::class, "viewOSCE"])->name('osce');
    Route::get('plab', [TrainingPageController::class, "viewPlab"])->name('plab');
    Route::get('cbt', [TrainingPageController::class, "viewCBT"])->name('cbt');
    Route::get('english-language', [TrainingPageController::class, "viewEnglishLanguage"])->name('english-language');
    Route::get('trainers', [TrainingPageController::class, "viewTrainers"])->name('trainers');
});


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

    Route::get('/portal', [ProfileController::class, "portal"])->name('front.portal');
    Route::get('/profile', [ProfileController::class, "profile"])->name('front.profile');
    Route::get('/profile/update', [ProfileController::class, "profileUpdate"])->name('front.profile.update');
    Route::post('/profile/update', [ProfileController::class, "profileUpdateAction"])->name('front.profile.update.action');
    Route::get('/profile/update/password', [ProfileController::class, "profileUpdatePassword"])->name('front.profile.update.password');
    Route::post('/profile/update/password', [ProfileController::class, "profileUpdatePasswordAction"])->name('front.profile.update.password.action');

    Route::get('/billing', [ProfileController::class, "billing"])->name('front.billing');

    Route::get('/training', [ProfileController::class, "training"])->name('front.training');
    Route::get('/training/payment/{course_id}', [StripePaymentController::class, "training_payment"])->name('front.training.payment');
    Route::get('/training/payment/{course_id}/{payment_id}/receipt', [StripePaymentController::class, "training_payment_process_receipt"])->name('front.training.payment.process.receipt');
    Route::get('/training/payment/{course_id}/{payment_id}/success', [StripePaymentController::class, "training_payment_process_success"])->name('front.training.payment.process.success');
    Route::get('/training/payment/{course_id}/{payment_id}/cancel', [StripePaymentController::class, "training_payment_process_cancel"])->name('front.training.payment.process.cancel');
    Route::get('/training/payment/{course_id}/{payment_id}/{payment_method}', [StripePaymentController::class, "training_payment_process"])->name('front.training.payment.process');
});

// Apply Course
Route::get('/apply', [ApplyController::class, "index"])->name('front.apply');
Route::post('/apply', [ApplyController::class, "apply"])->name('front.apply.action');

Route::get('/test-bank', [StripePaymentController::class, "createCustomer"])->name('payment.bank');

Route::post('stripe/hook', [\App\Http\Controllers\Payment\StripeWebhook::class, 'trackEvents',])->name('stripe.webhook');
Route::get('stripe/simulate/bank_transfer', [\App\Http\Controllers\Payment\StripeWebhook::class, 'simulateBankTransfer',])->name('stripe.simulate.bank_transfer');
