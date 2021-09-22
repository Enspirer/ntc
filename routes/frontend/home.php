<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\SingleNewsController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\CareersController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('news', [NewsController::class, 'index'])->name('news');
Route::get('news/single/{id}', [SingleNewsController::class, 'index'])->name('single_news');


Route::get('product/rice-milling-machines', [ProductController::class, 'riceMilling'])->name('product_rice_milling');
Route::post('product/inquire', [ProductController::class, 'inquire'])->name('product_rice_milling.inquire');


Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('about-us', [AboutUsController::class, 'index'])->name('about_us');

Route::get('careers', [CareersController::class, 'index'])->name('careers');
Route::post('careers/general_candidate', [CareersController::class, 'general_candidate'])->name('careers.general_candidate');
Route::post('careers/job_candidate', [CareersController::class, 'job_candidate'])->name('careers.job_candidate');

Route::get('contact-us', [ContactController::class, 'index'])->name('contact_us');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
