<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PhotoController;
use App\Models\Product;
use App\Models\Order;
use App\Models\ProductCode;
use App\Models\Category;
// use App\Models\OrderDetail;
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

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/', [ProductController::class, 'stote'])->name('products.stote');
    Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});

// products/create

// photos
Route::resource('photos',PhotoController::class);
// /photos/create

Route::get('link_vip/{age}',function($age){
    echo 'Trang Link Vip';
})->middleware('checkage');

Route::get('link_normal',function(){
    echo 'Trang Link Binh Thuong';
});

Route::get('hasOne',function(){
    $item = Product::find(1);//
    dd($item->product_code);
});

Route::get('hasOneInverse',function(){
    $item = Product::find(1);//
    dd($item->Product);
});

Route::get('hasMany',function(){

});

Route::get('hasInverse',function(){

});

Route::get('manyManyProducts',function(){

});

Route::get('manyManyOrders',function(){

});
