<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*u
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
// Route::prefix('admin')->group(function () {
//     Route::get('/Produc',[ProductController::class,'index'])->name('admin.index');
//     Route::post('/store',[ProductController::class,'store'])->name('admin.store');

// });
Route::prefix('admin')->group(function () {
    Route::get('/create', [ProductController::class, 'create'])->name('admin.create');
    Route::post('/', [ProductController::class, 'store'])->name('admin.store');

});
