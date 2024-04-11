<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', [ProductController::class, 'index'])->name('index');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/new', [ProductController::class, 'new'])->name('product.new');
Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');



