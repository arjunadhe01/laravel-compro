<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Utilities\CompanyController;
use App\Http\Controllers\Backend\Utilities\FooterController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home.index');
});

/* Backend */
Route::controller(AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', 'index')->name('login');
        Route::post('login', 'authentication')->name('authentication');
    });
    Route::middleware('auth')->group(function () {
        Route::post('logout', 'logout')->name('logout');
    });
});

Route::controller(DashboardController::class)->prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
});

/* Utility */
Route::prefix('utilities')->group(function () {
    Route::controller(CompanyController::class)->prefix('company')->name('company.')->middleware('auth')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('update', 'update')->name('update');
    });
    Route::controller(FooterController::class)->prefix('footer')->name('footer.')->middleware('auth')->group(function () {
        Route::prefix('social-media')->name('social-media.')->group(function () {
            Route::get('/', 'socialMedia')->name('index');
            Route::post('store', 'socialMediaStore')->name('store');
            Route::put('{socialMedia}', 'socialMediaUpdate')->name('update');
            Route::delete('{socialMedia}', 'socialMediaDestroy')->name('destroy');
        });
        Route::prefix('navigation')->name('navigation.')->group(function () {
            Route::get('/', 'navigation')->name('index');
            Route::post('store', 'navigationStore')->name('store');
            Route::put('{navigation}', 'navigationUpdate')->name('update');
            Route::delete('{navigation}', 'navigationDestroy')->name('destroy');
        });
    });
});

/* Frontend */
/* Home */
Route::controller(HomeController::class)->prefix('home')->name('home.')->group(function () {
    Route::get('/', 'index')->name('index');
});
