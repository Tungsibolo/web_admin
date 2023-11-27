<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

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

Route::prefix('admin')->group(function () {
    //Vào dashboard
    Route::get('/', [ProductsController::class, 'productList'])->name('products.list');
    Route::get('/dashboard', [ProductsController::class, 'productList'])->name('products.list');

    //Quản lí danh sách đơn hàng
    Route::get('/orders', [OrderController::class, 'productList'])->name('products.list');

    //Quản lí danh sách sản phẩm
        //Xem ds
    Route::get('/products', [ProductController::class, 'productList'])->name('products.list');
        //Thêm
    Route::post('/products/add', [ProductController::class, 'addProduct'])->name('products.add');
        //Sua

    //Quản lí danh sách khách hàng
        //Xem ds
    Route::get('/users', [UserController::class, 'userList'])->name('user.list');

    //Quản lí trang danh sách nhà cung cấp
        //Xem ds
    Route::get('/suppliers', [SupplierController::class, 'supplierList'])->name('supplier.list');
        //Thêm
    Route::get('/suppliers/add', [SupplierController::class, 'addSupplier'])->name('supplier.add');
        //Sua
});
