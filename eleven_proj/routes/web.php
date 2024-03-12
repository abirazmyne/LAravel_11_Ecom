<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminDashBoardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/product/detail', [WebsiteController::class, 'productdetail'])->name('product.detail');
Route::get('/product/category', [WebsiteController::class, 'bycategoryProduct'])->name('product.bycategory');


Route::get('/add/cart', [CartController::class, 'index'])->name('add.cart');



