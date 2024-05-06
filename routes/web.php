<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Requests\StoreOrderRequest;

use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product}', [ProductController::class, 'product_detail'])->name('products.show');
Route::get('/', [ProductController::class, 'index'])->name('dashboard');
Route::get('/about', function() {
    return view('about_us');
})->name('about');
Route::get('/contact', function() {
    return view('contact_us');
})->name('contact');
Route::get('/add_product', function() {
    return view('add_product_page');
})->name('add_product');
Route::get('/admin', [ProductController::class, 'admin_view'])->name('admin');
Route::post('/add_to_cart', [OrderController::class, 'store'])->name('add_to_cart');


require __DIR__.'/auth.php';
