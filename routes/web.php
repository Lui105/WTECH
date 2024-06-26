<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DeliveryMethodController;
use App\Http\Controllers\PaymentDetailsController;
use App\Http\Controllers\ProductImageController;
use App\Http\Requests\StoreOrderRequest;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{product}', [ProductController::class, 'product_detail'])->name('products.show');
Route::get('/', [ProductController::class, 'index'])->name('dashboard');
Route::get('/cart', [OrderController::class, 'index'])->name('cart');

Route::get('/about', function() {
    return view('about_us');
})->name('about');
Route::get('/contact', function() {
    return view('contact_us');
})->name('contact');
Route::get('/add_product_page', function() {
    return view('add_product_page');
})->name('add_product_page');
Route::get('/admin', [ProductController::class, 'admin_view'])->name('admin');
Route::get('/payment', [PaymentDetailsController::class, 'index'])->name('payment');

Route::get('/payment/success', [PaymentDetailsController::class, 'showSuccessPage'])->name('payment.success');
Route::get('/product/view/{id}', [ProductController::class, 'updateLastViewed'])->name('product.update-last-viewed');

Route::get('/delivery', [DeliveryMethodController::class, 'index'])->name('delivery');
Route::post('/delivery/details', [DeliveryMethodController::class, 'store'])->name('submit.delivery.details');
Route::post('/payment/details', [PaymentDetailsController::class, 'store'])->name('payment.store');

Route::post('/add_to_cart', [OrderController::class, 'store'])->name('add_to_cart');
Route::post('/cart/update/{productId}', [OrderController::class, 'updateQuantity'])->name('cart.update');
Route::post('/cart/delete/{productId}', [OrderController::class, 'deleteItem'])->name('cart.delete');
Route::post('/add_product', [ProductController::class, 'store'])->name('add_product');

Route::delete('/delete_product/{product_id}', [ProductController::class, 'destroy'])->name('remove_product');
Route::put('/update/{product_id}', [ProductController::class, 'update'])->name('update');
Route::get('/edit_product/{product_id}', [ProductController::class, 'edit'])->name('edit_product');
Route::delete('/delete_image/{product_id}', [ProductImageController::class, 'delete_image'])->name('delete_image');

require __DIR__.'/auth.php';
