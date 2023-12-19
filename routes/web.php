<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ApplyController;
use App\Http\Controllers\Frontend\HomepageController;

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
Route::get('/', [HomepageController::class, "home"])->name('homepage');

// Apply Course
Route::get('/apply', [ApplyController::class, "index"])->name('front.apply');
Route::post('/apply', [ApplyController::class, "apply"])->name('front.apply.action');
