<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PhotoController;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
use App\Models\ProductCode;
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

// Route::prefix('products')->group(function () {
//     Route::get('/', [ProductController::class, 'index'])->name('products.index');
//     Route::get('/create', [ProductController::class, 'create'])->name('products.create');
//     Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
//     Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
//     Route::post('/', [ProductController::class, 'stote'])->name('products.stote');
//     Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
//     Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
// });

// products/create

// photos
Route::prefix('admin')->group(function () {
    Route::resource('photos',PhotoController::class);
    Route::resource('products',ProductController::class);
});

// /photos/create


Route::get('link_vip/{age}',function($age){
    echo 'Trang Link Vip';
})->middleware('checkage');

Route::get('link_normal',function(){
    echo 'Trang Link Binh Thuong';
});


Route::get('hasOne',function(){
    $item = Product::find(1);//select * from products where id = 1
    dd($item->product_code);//select * from product_codes where product_id = 1
});

Route::get('hasOneInverse',function(){
    $item = ProductCode::find(1);
    dd($item->product);
});

Route::get('hasMany',function(){
    $item = Category::find(1);
    dd($item->products->toArray());
});

Route::get('hasInverse',function(){
    $item = Product::find(2);
    dd($item->category->toArray());
});

Route::get('manyManyProducts',function(){
    $item = Product::find(1);
    dd($item->orders->toArray());
});

Route::get('manyManyOrders',function(){
    $item = Order::find(1);
    dd($item->products->toArray());
});
