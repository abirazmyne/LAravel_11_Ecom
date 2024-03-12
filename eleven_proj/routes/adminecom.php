<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashBoardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;







Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
Route::get('/dashboard/', [AdminDashBoardController::class,'index'])->name('admin.dashboard');

Route::get('/category/add', [CategoryController::class,'index'])->name('category.add');
Route::get('/category/manage', [CategoryController::class,'manage'])->name('category.manage');
Route::post('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


Route::get('/subCategory/add', [SubCategoryController::class, 'index'])->name('subCategory.add');
Route::post('/subCategory/create', [SubCategoryController::class, 'create'])->name('subCategory.create');
Route::get('/subCategory/edit/{id}', [SubCategoryController::class, 'edit'])->name('subCategory.edit');
Route::post('/subCategory/update/{id}', [SubCategoryController::class, 'update'])->name('subCategory.update');
Route::get('/subCategory/delete/{id}', [SubCategoryController::class, 'delete'])->name('subCategory.delete');
Route::get('/subCategory/manage', [SubCategoryController::class, 'manage'])->name('subCategory.manage');

Route::get('/brand/add', [BrandController::class, 'index'])->name('brand.add');
Route::post('/brand/create', [BrandController::class, 'create'])->name('brand.create');
Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
Route::post('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');
Route::get('/brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');
Route::get('/brand/manage', [BrandController::class, 'manage'])->name('brand.manage');

Route::get('/unit/add', [UnitController::class, 'index'])->name('unit.add');
Route::post('/unit/create', [UnitController::class, 'create'])->name('unit.create');
Route::get('/unit/edit/{id}', [UnitController::class, 'edit'])->name('unit.edit');
Route::post('/unit/update/{id}', [UnitController::class, 'update'])->name('unit.update');
Route::get('/unit/delete/{id}', [UnitController::class, 'delete'])->name('unit.delete');
Route::get('/unit/manage', [UnitController::class, 'manage'])->name('unit.manage');
//
//    Route::get('/courier/add', [CourierController::class, 'index'])->name('courier.add');
//    Route::post('/courier/create', [CourierController::class, 'create'])->name('courier.create');
//    Route::get('/courier/edit/{id}', [CourierController::class, 'edit'])->name('courier.edit');
//    Route::post('/courier/update/{id}', [CourierController::class, 'update'])->name('courier.update');
//    Route::get('/courier/delete/{id}', [CourierController::class, 'delete'])->name('courier.delete');
//    Route::get('/courier/manage', [CourierController::class, 'manage'])->name('courier.manage');
//
//
//    Route::get('/order/all', [AdminOrderController::class, 'index'])->name('admin-order.all');
//    Route::get('admin.order-detail/{id}', [AdminOrderController::class, 'details'])->name('admin.order-detail');
//    Route::get('admin.order-edit/{id}', [AdminOrderController::class, 'edit'])->name('admin.order-edit');
//    Route::post('admin.order-update/{id}', [AdminOrderController::class, 'update'])->name('admin.order-update');
//    Route::get('admin.order-invoice/{id}', [AdminOrderController::class, 'invoice'])->name('admin.order-invoice');
//    Route::get('admin.download-invoice/{id}', [AdminOrderController::class, 'downloadinvoice'])->name('admin.download-invoice');
//    Route::get('admin.order-delete/{id}', [AdminOrderController::class, 'delete'])->name('admin.order-delete');
//    Route::get('admin.order-pdelete/{id}', [AdminOrderController::class, 'pdelete'])->name('admin.order-p-delete');
//

Route::resource('product',ProductController::class);
Route::get('getSubCategory_ByCategory', [ProductController::class,'getSubcategoryByCategory'])->name('getSubCategory_ByCategory');



});
