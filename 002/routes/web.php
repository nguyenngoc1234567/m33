<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductControler;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('hello/{name?}/{age?}',function($name='laravel',$age=0){
//     return 'hello ' . $name .' '. 'age' .' ' . $age;
// })->where(['name' => '[A-Za-z]+', 'age' => '[0-9]+']);


// Route::route ('products')->group(function () {
//     //hier thi
//     Route::get('/', [ProductControler::class,'index'])->name('products.index');
// //fom them
//     Route::get('/create',[ProductControler::class,'create'])->name('products.create');
// //xuly them
//     Route::post('/',[ProductControler::class,'store'])->name('products.store');
// //xemchitiet
//     Route::post('/{id}',[ProductControler::class,'show'])->name('products.show');
// //capnhat
//     Route::put('/{id}',[ProductControler::class,'update'])->name('products.update');
// //fom sua
//     Route::get('/{id}/edit',[ProductControler::class,'edit'])->name('products.edit');
// //fom xoa
//     Route::delete('/{id}',[ProductControler::class,'destroy'])->name('products.destroy');

// });
// Route::get('test_route', function () {
//    echo '<br>'.route('products.index');
//    echo '<br>'.route('products.create');
//    echo '<br>'.route('products.store');

//    echo '<br>'.route('products.show',1);
//    echo '<br>'.route('products.edit',1);
//    echo '<br>'.route('products.update',1);
//    echo '<br>'.route('products.destroy',1);
// });
// Route::resource('photos',PhotoController::class);

// Route::get('link_vip/{age}',function($age){
//     echo 'trang link vip';
// })->middleware('checkage');

// Route::get('link_nromal',function(){
//     echo 'trang link binh thuong';
// });
Route::get('xoa_san_pham/{product_id}', function ($product_id ,Request $request) {
    //l???y gi??? h??ng c?? , n???u ko c?? gi?? tr??? th?? ?????t m???ng r???ng
    $cart = $request->session()->get('cart', []);
 //x??a ph???n t??? trong m???ng d???a theo ch??? s???
 if( isset($cart[$product_id])){
     unset($cart[$product_id]);
 }
   //l??u session
 $request->session()->put('cart', $cart);

 //chuy???n h?????ng sang trang gi??? h??ng
 return redirect('/gio_hang');
});



Route::get('them_gio_hang/{product_id}/{qty}', function ($product_id, $qty, Request $request) {
    // laays  gio hang cu neu khong co gia trij thi dat mang rong
    $cart = $request->session()->get('cart', []);
    $cart[$product_id] = $qty;
    // them phan tu vao mang voi chi so laf product_id va gia tri qty
    if (isset($cart[$product_id])) {
        $cart[$product_id] = $cart[$product_id] + $qty;
    } else {
        $cart[$product_id] = $qty;
    }


    //l??u session
    $request->session()->put('cart', $cart);

    // chuyen huong gio hang
    return redirect('/gio_hang');
});


Route::get('gio_hang', function (Request $request) {
    //l???y session

    $cart = $request->session()->get('cart');
     // lay id sp tuwf mang
     $product_id = array_keys($cart);
    echo '<pre>';
    print_r($cart);
    print_r($product_id);
    echo '</pre>';
});
