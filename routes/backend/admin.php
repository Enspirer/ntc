<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\InquireController;
use App\Http\Controllers\Backend\ProductsController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/getdetails', [CategoryController::class, 'getdetails'])->name('category.getdetails');
Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('category/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::get('category/sub_category/{id}', [CategoryController::class, 'sub_catagory'])->name('category.sub_category');
Route::post('category/sub_category', [CategoryController::class, 'sub_catagory_store'])->name('category.subcat_store');
Route::get('category/sub_category/subcatgetdetails/{id}', [CategoryController::class, 'subcatgetdetails'])->name('category.getdetailssubcat');
Route::get('category/sub_category/sc_delete/{id}', [CategoryController::class, 'sub_catagory_destroy'])->name('category.cuisine_destroy');


Route::get('sub_category', [SubCategoryController::class, 'index'])->name('sub_category.index');
Route::post('sub_category/store', [SubCategoryController::class, 'store'])->name('sub_category.store');
Route::get('sub_category/getdetails', [SubCategoryController::class, 'getdetails'])->name('sub_category.getdetails');
Route::get('sub_category/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub_category.edit');
Route::post('sub_category/update', [SubCategoryController::class, 'update'])->name('sub_category.update');
Route::get('sub_category/delete/{id}', [SubCategoryController::class, 'destroy'])->name('sub_category.destroy');

Route::get('products', [ProductsController::class, 'index'])->name('products.index');

Route::get('inquire', [InquireController::class, 'index'])->name('inquire.index');
Route::get('inquire/getdetails', [InquireController::class, 'getdetails'])->name('inquire.getdetails');
Route::get('inquire/edit/{id}', [InquireController::class, 'edit'])->name('inquire.edit');
Route::post('inquire/update', [InquireController::class, 'update'])->name('inquire.update');
Route::get('inquire/delete/{id}', [InquireController::class, 'destroy'])->name('inquire.destroy');


