<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\TrainingPageController;
use App\Http\Controllers\Frontend\ResourcesPageController;
use App\Http\Controllers\Frontend\InternationalCandidatesPageController;

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
