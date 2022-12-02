<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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
// Route::post('/check-email', [UserController::class, 'validationEmail'])->name('checkEmail');

// Route::get('/', function () {
//     return view('index');
// });
Route::group(['prefix'=>'tasks'],function () {
    //hier thi
    Route::get('/task', [TaskController::class,'index'])->name('task.index');
//fom them
    Route::get('/create',[TaskController::class,'create'])->name('task.create');
//xuly them
    Route::post('/',[TaskController::class,'store'])->name('task.store');
//xemchitiet
    Route::post('/{id}',[TaskController::class,'show'])->name('task.show');
//capnhat
    Route::put('/{id}',[TaskController::class,'update'])->name('task.update');
//fom sua
    Route::get('/{id}/edit',[TaskController::class,'edit'])->name('task.edit');
//fom xoa
    Route::delete('/{id}',[TaskController::class,'destroy'])->name('task.destroy');
});