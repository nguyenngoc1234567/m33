<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductControler;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{name?}/{age?}',function($name='laravel',$age=0){
    return 'hello ' . $name .' '. 'age' .' ' . $age;
})->where(['name' => '[A-Za-z]+', 'age' => '[0-9]+']);


Route::route ('products')->group(function () {
    //hier thi
    Route::get('/', [ProductControler::class,'index'])->name('products.index');
//fom them
    Route::get('/create',[ProductControler::class,'create'])->name('products.create');
//xuly them
    Route::post('/',[ProductControler::class,'store'])->name('products.store');
//xemchitiet
    Route::post('/{id}',[ProductControler::class,'show'])->name('products.show');
//capnhat
    Route::put('/{id}',[ProductControler::class,'update'])->name('products.update');
//fom sua
    Route::get('/{id}/edit',[ProductControler::class,'edit'])->name('products.edit');
//fom xoa
    Route::delete('/{id}',[ProductControler::class,'destroy'])->name('products.destroy');
    
});
Route::get('test_route', function () {
   echo '<br>'.route('products.index');
   echo '<br>'.route('products.create');
   echo '<br>'.route('products.store');

   echo '<br>'.route('products.show',1);
   echo '<br>'.route('products.edit',1);
   echo '<br>'.route('products.update',1);
   echo '<br>'.route('products.destroy',1);
});
Route::resource('photos',PhotoController::class);

Route::get('link_vip/{age}',function($age){
    echo 'trang link vip';
})->middleware('checkage');

Route::get('link_nromal',function(){
    echo 'trang link binh thuong';
    });