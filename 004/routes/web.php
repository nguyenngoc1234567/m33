<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Order;
use App\Models\ProductCode;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/show/{id}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('destroy/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');


    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create-products', [ProductController::class, 'create'])->name('products.create');
    Route::post('/store-products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/show-products/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/edit-products/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/update-products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('destroy-products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');



    Route::get('hasOne',function(){
    $item = Product::find(5);
    dd($item);
});

Route::get('hasOneInverse',function(){
    $item = Product::find(6);
    dd($item);
});

Route::get('hasMany',function(){

});

Route::get('hasInverse',function(){

});

Route::get('manyManyProducts',function(){

});

Route::get('manyManyOrders',function(){

});
