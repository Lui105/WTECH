<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product}', [ProductController::class, 'product_detail'])->name('products.show');
Route::get('/', [ProductController::class, 'index'])->name('dashboard');
Route::get('/about', function() {
    return view('about_us');
})->name('about');
Route::get('/contact', function() {
    return view('contact_us');
})->name('contact');

require __DIR__.'/auth.php';
