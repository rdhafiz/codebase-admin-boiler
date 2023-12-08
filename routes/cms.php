<?php

use App\Http\Controllers\Cms\CmsController;
use Illuminate\Support\Facades\Route;

// CMS Route
// ===================
Route::get('/secure/administration/auth/{any}', [CmsController::class, 'index'])->where('any', '.*')->name('lvs.auth');
Route::get('/secure/administration', [CmsController::class, 'index'])->where('any', '.*')->name('lvs.home');
Route::get('/secure/administration/{any}', [CmsController::class, 'index'])->where('any', '.*')->name('lvs.home.any');
