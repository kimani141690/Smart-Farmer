<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Routing;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Routing::class, 'showIndex']);

Route::middleware(['disable_back'])->group(function () {

    Route::prefix('auth')->group(function () {
        Route::get('login', [Routing::class, 'accounts'])->name('login');
        Route::get('farmer', [Routing::class, 'accounts'])->name('farmer');
        Route::get('customer', [Routing::class, 'accounts'])->name('customer');
        Route::get('reset', [Routing::class, 'accounts'])->name('reset');
        Route::get('farmer_details', [Routing::class, 'accounts'])->named('farmer_details');
        Route::get('customer_details', [Routing::class, 'accounts'])->named('customer_details');

        Route::prefix('google')->group(function () {
            Route::get('/', [GoogleController::class, 'redirectToGoogle']);
            Route::get('call-back', [GoogleController::class, 'handleGoogleCallback']);
        });

        Route::post('login', [AuthController::class, 'login']);
        Route::post('registration', [AuthController::class, 'registration']);
    });

});
