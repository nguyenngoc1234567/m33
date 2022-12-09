<?php

use Illuminate\Support\Facades\DB;
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
Route::get('cau1', function () {
    $items = DB::table('nhacungcap')
        ->get('TENCONGTY');
    dd($items);
});
Route::get('cau2', function () {
    $items = DB::table('mathang')
        ->select('MAHANG', 'TENHANG', 'SOLUONG')
        ->get();
    dd($items);
});
Route::get('cau3', function () {
    $items = DB::table('nhanvien')
        ->select('HO', 'TEN', 'DIACHI', 'NGAYLAMVIEC')
        ->get();
    dd($items);
});
Route::get('cau4', function () {
    $items = DB::table('nhacungcap')
        ->select('DIACHI', 'DIENTHOAI')
        ->where('TENGIAODICH', 'VINAMILK')
        ->get();
    dd($items);
});
Route::get('cau5', function () {
    $items = DB::table('mathang')
        ->select('MAHANG', 'TENHANG')
        ->where('GIAHANG', '>', '100000', 'AND', 'SOLUONG', '<', '50')
        ->get();
    dd($items);
});
Route::get('cau6', function () {
    $items = DB::table('nhacungcap')
        ->select('TENCONGTY AS NHACUNGCAP', 'TENHANG')
        ->join('mathang', 'nhacungcap.MACONGTY', '=', 'mathang.MACONGTY')
        ->get();
    dd($items);
});
Route::get('cau7', function () {
    $items = DB::table('nhacungcap')
        ->select('TENHANG')
        ->join('mathang', 'nhacungcap.MACONGTY', '=', 'mathang.MACONGTY')
        ->where('TENCONGTY', 'Việt Tiến')
        ->get();
    dd($items);
});
Route::get('cau8', function () {
    $items = DB::table('loaihang')
        ->select('TENLOAIHANG', 'TENCONGTY', 'DIACHI',)
        ->join('mathang', 'loaihang.MALOAIHANG', '=', 'mathang.MALOAIHANG')
        ->join('nhacungcap', 'nhacungcap.MACONGTY', '=', 'mathang.MACONGTY')
        ->where('TENLOAIHANG', 'thực phẩm')
        ->get();
    dd($items);
});
Route::get('cau9', function () {
    $items = DB::table('khachhang')
        ->select('khachhang.TENGIAODICH',)
        ->join('dondathang', 'khachhang.MAKHACHHANG', '=', 'dondathang.MAKHACHHANG')
        ->join('chitietdathang', 'dondathang.SOHOADON', '=', 'chitietdathang.SOHOADON')
        ->join('mathang', 'chitietdathang.MAHANG', '=', 'mathang.MAHANG')
        ->where('TENHANG', 'thực phẩm loại 185')
        ->get();
    dd($items);
});
Route::get('cau10', function () {
    $items = DB::table('dondathang')
        ->select('TEN', 'HO', 'NGAYGIAOHANG', 'NOIGIAOHANG', 'dondathang.SOHOADON')
        ->join('nhanvien', 'dondathang.MANHANVIEN', '=', 'nhanvien.MANHANVIEN')
        ->where('SOHOADON', '1')
        ->get();
    dd($items);
});
Route::get('cau11', function () {
    $items = DB::table('nhanvien')
        ->select('HO', 'TEN', 'NGAYSINH', DB::raw('sum(LUONGCOBAN + PHUCAP) as TIENCONGTYPHAITRA'))
        ->groupBy('MANHANVIEN')
        ->get();
    dd($items);
});

Route::get('cau12', function () {
    $items = DB::table('chitietdathang')
        ->select('SOHOADON', DB::raw('sum(SOLUONG * GIABAN - MUCGIAMGIA)'))
        ->groupBy('SOHOADON')
        ->having('SOHOADON', '3')
        ->get();
    dd($items);
});

Route::get('cau122', function () {
$items = DB::table('chitietdathang')
        ->select('SOHOADON', DB::raw('sum(SOLUONG * GIABAN - MUCGIAMGIA / 100)'))
        ->groupBy('SOHOADON')
        ->having('SOHOADON', '3')
        ->get();
        dd($items);
    });


