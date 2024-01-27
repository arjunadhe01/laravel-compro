<?php

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
    return redirect()->route('frontend.home.index');
});

/* Backend */
Route::controller(App\Http\Controllers\Backend\AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', 'index')->name('login');
        Route::post('login', 'authentication')->name('authentication');
    });
    Route::middleware('auth')->group(function () {
        Route::post('logout', 'logout')->name('logout');
    });
});

/* Dashboard */
Route::controller(App\Http\Controllers\Backend\DashboardController::class)->prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
});

/* Company Profile */
Route::prefix('company-profile')->group(function () {
    /* Home */
    Route::controller(App\Http\Controllers\Backend\HomeController::class)->prefix('home')->name('home.')->middleware('auth')->group(function () {
        /* Hero */
        Route::prefix('hero')->name('hero.')->group(function () {
            Route::get('/', 'heroIndex')->name('index');
            Route::post('/', 'heroUpdate')->name('update');
        });
        /* About */
        Route::prefix('about')->name('about.')->group(function () {
            Route::get('/', 'aboutIndex')->name('index');
            Route::post('/', 'aboutStore')->name('store');
            Route::put('{about}', 'aboutUpdate')->name('update');
            Route::delete('{about}', 'aboutDestroy')->name('destroy');
        });
        /* Highlight */
        Route::prefix('highlight')->name('highlight.')->group(function () {
            Route::get('/', 'highlightIndex')->name('index');
            Route::post('/', 'highlightStore')->name('store');
            Route::put('{highlight}', 'highlightUpdate')->name('update');
            Route::delete('{highlight}', 'highlightDestroy')->name('destroy');
        });
    });
    /* Feature */
    Route::controller(App\Http\Controllers\Backend\FeatureController::class)->prefix('feature')->name('feature.')->middleware('auth')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::put('{feature}', 'update')->name('update');
        Route::delete('{feature}', 'destroy')->name('destroy');
    });
});

/* Utility */
Route::prefix('utilities')->group(function () {
    /* Company */
    Route::controller(App\Http\Controllers\Backend\Utilities\CompanyController::class)->prefix('company')->name('company.')->middleware('auth')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('update', 'update')->name('update');
    });
    /* Review */
    Route::controller(App\Http\Controllers\Backend\Utilities\ReviewController::class)->prefix('review')->name('review.')->middleware('auth')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::put('{review}', 'update')->name('update');
        Route::delete('{review}', 'destroy')->name('destroy');
    });
    /* Footer */
    Route::controller(App\Http\Controllers\Backend\Utilities\FooterController::class)->prefix('footer')->name('footer.')->middleware('auth')->group(function () {
        /* Social Media */
        Route::prefix('social-media')->name('social-media.')->group(function () {
            Route::get('/', 'socialMedia')->name('index');
            Route::post('/', 'socialMediaStore')->name('store');
            Route::put('{socialMedia}', 'socialMediaUpdate')->name('update');
            Route::delete('{socialMedia}', 'socialMediaDestroy')->name('destroy');
        });
        /* Navigation */
        Route::prefix('navigation')->name('navigation.')->group(function () {
            Route::get('/', 'navigation')->name('index');
            Route::post('/', 'navigationStore')->name('store');
            Route::put('{navigation}', 'navigationUpdate')->name('update');
            Route::delete('{navigation}', 'navigationDestroy')->name('destroy');
        });
    });
});

/* Frontend */
Route::name('frontend.')->group(function () {
    /* Home */
    Route::controller(App\Http\Controllers\Frontend\HomeController::class)->prefix('home')->name('home.')->group(function () {
        Route::get('/', 'index')->name('index');
    });
    /* Feature */
    Route::controller(App\Http\Controllers\Frontend\FeatureController::class)->prefix('feature')->name('feature.')->group(function () {
        Route::get('/', 'index')->name('index');
    });
    /* Contact Us */
    Route::controller(App\Http\Controllers\Frontend\ContactUsController::class)->prefix('contact-us')->name('contact-us.')->group(function () {
        Route::get('/', 'index')->name('index');
    });
});
