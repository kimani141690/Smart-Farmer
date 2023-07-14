<?php

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
        Route::get('registration', [Routing::class, 'accounts'])->name('registration');
        Route::get('reset', [Routing::class, 'accounts'])->name('reset');
    });
});
