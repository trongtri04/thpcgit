<?php

use App\Http\Controllers\Admin\orderController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\FontendController;
use Illuminate\Support\Facades\Route;


// login
Route::get('/login', [FontendController::class, 'show_login'])->name('login');
Route::post('/check_login', [FontendController::class, 'check_login']);

// admin 

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return view('admin.home');
        });
        Route::get('product/list', [productController::class, 'list_product']);
        Route::post('product/add', [productController::class, 'insert_product']);
        Route::get('product/create', [productController::class, 'add_product']);
        Route::get('product/delete', [productController::class, 'delete_product']);
        Route::get('product/edit/{id}', [productController::class, 'edit_product']);
        Route::post('product/edit/{id}', [productController::class, 'update_product']);
    });
});
// product



// order admin
Route::get('/admin/order/list', [orderController::class, 'list_order']);
Route::get('/admin/order/detail/{order_detail}', [orderController::class, 'detail_order']);
Route::get('/admin/order/delete', [orderController::class, 'delete_order']);
Route::get('/admin/order/delete_detail', [orderController::class, 'delete_order_detail']);

// upload
Route::post('/upload', [UploadController::class, 'uploadImage']);

// order
Route::get('/order/confirm', function () {
    return view('order.confirm');
});
Route::get('/order/success', function () {
    return view('order.success');
});


// fontend
Route::get('/', [FontendController::class, 'index']);
Route::get('/product_detail/{id}', [FontendController::class, 'show_product']);



Route::get('/productMainboard', [FontendController::class, 'show_mainboards'])->name('productMainboard');
Route::get('/productMainboard_detail/{id}', [FontendController::class, 'show_mainboard_detail'])->name('productMainboard_detail');

Route::get('/productCpu', [FontendController::class, 'show_cpu'])->name('productCpu');
Route::get('/productCpu_detail/{id}', [FontendController::class, 'show_cpu_detail'])->name('productCpu_detail');

Route::get('/productCase', [FontendController::class, 'show_case'])->name('productCase');
Route::get('/productCase_detail/{id}', [FontendController::class, 'show_case_detail'])->name('productCase_detail');

Route::get('/productHdd', [FontendController::class, 'show_hdd'])->name('productHdd');
Route::get('/productHdd_detail/{id}', [FontendController::class, 'show_hdd_detail'])->name('productHdd_detail');

Route::get('/productManhinh', [FontendController::class, 'show_manhinh'])->name('productManhinh');
Route::get('/productManhinh_detail/{id}', [FontendController::class, 'show_manhinh_detail'])->name('productManhinh_detail');

Route::get('/productNguon', [FontendController::class, 'show_nguon'])->name('productNguon');
Route::get('/productNguon_detail/{id}', [FontendController::class, 'show_nguon_detail'])->name('productNguon_detail');

Route::get('/productRam', [FontendController::class, 'show_ram'])->name('productRam');
Route::get('/productRam_detail/{id}', [FontendController::class, 'show_ram_detail'])->name('productRam_detail');

Route::get('/productSsd', [FontendController::class, 'show_ssd'])->name('productSsd');
Route::get('/productSsd_detail/{id}', [FontendController::class, 'show_ssd_detail'])->name('productSsd_detail');

Route::get('/productVga', [FontendController::class, 'show_vga'])->name('productVga');
Route::get('/productVga_detail/{id}', [FontendController::class, 'show_vga_detail'])->name('productVga_detail');

// card
Route::post('/cart/add', [FontendController::class, 'add_cart']);
Route::get('/cart', [FontendController::class, 'show_cart']);
Route::get('/cart/delete/{id}', [FontendController::class, 'delete_cart']);
Route::post('/cart/update', [FontendController::class, 'update_cart']);
Route::post('/cart/send', [FontendController::class, 'send_cart']);
