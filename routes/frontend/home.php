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
use App\Http\Controllers\Frontend\AizUploadController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('news', [NewsController::class, 'index'])->name('news');
Route::get('news/single/{id}', [SingleNewsController::class, 'index'])->name('single_news');


Route::get('product/solo_product/{id}', [ProductController::class, 'solo_product'])->name('solo_product');
Route::get('product/category/all_products/{id}', [ProductController::class, 'category_all_products'])->name('category.all_product');
Route::post('product/inquire', [ProductController::class, 'inquire'])->name('product_rice_milling.inquire');


Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('about-us', [AboutUsController::class, 'index'])->name('about_us');

Route::get('careers', [CareersController::class, 'index'])->name('careers');
Route::post('careers/general_candidate', [CareersController::class, 'general_candidate'])->name('careers.general_candidate');
Route::post('careers/job_candidate', [CareersController::class, 'job_candidate'])->name('careers.job_candidate');

Route::get('contact-us', [ContactController::class, 'index'])->name('contact_us');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');


Route::post('/aiz-uploader', [AizUploadController::class, 'show_uploader']);
Route::post('/aiz-uploader/upload', [AizUploadController::class, 'upload']);
Route::get('/aiz-uploader/get_uploaded_files', [AizUploadController::class, 'get_uploaded_files']);
Route::post('/aiz-uploader/get_file_by_ids', [AizUploadController::class, 'get_preview_files']);
Route::get('/aiz-uploader/download/{id}', [AizUploadController::class, 'attachment_download'])->name('download_attachment');
Route::get('uploads/all/{file_name}',[AizUploadController::class,'get_image_content']);






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


