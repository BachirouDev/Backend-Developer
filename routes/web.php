<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', [ProductController::class, 'index'])->name('index');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/new', [ProductController::class, 'new'])->name('product.new');


