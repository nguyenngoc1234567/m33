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

Route::get('cau2.1', function () {
    $items = DB::table('nha_cung_caps')
        ->select('*')
        ->get();
    dd($items);
});
Route::get('cau2.2', function () {
    $items = DB::table('mat_hangs')
        ->select('MAHANG', 'TENHANG', 'SOLUONG')
        ->get();
    dd($items);
});
Route::get('cau2.3', function () {
    $items = DB::table('nhan_viens')
        ->select('HO', 'TEN', 'DIACHI', 'NGAYLAMVIEC')
        ->get();
    dd($items);
});
Route::get('cau2.4', function () {
    $items = DB::table('nha_cung_caps')
        ->select('DIACHI', 'DIENTHOAI')
        ->where('TENGIAODICH', 'VINAMILK')
        ->get();
    dd($items);
});
Route::get('cau2.5', function () {
    $items = DB::table('mat_hangs')
        ->select('MAHANG', 'TENHANG')
        ->where('GIAHANG', '>', '100000', 'AND', 'SOLUONG', '<', '50')
        ->get();
    dd($items);
});
Route::get('cau2.6', function () {
    $items = DB::table('nha_cung_caps')
        ->select('TENCONGTY AS NHACUNGCAP', 'TENHANG')
        ->join('mat_hangs', 'nha_cung_caps.MACONGTY', '=', 'mat_hangs.MACONGTY')
        ->get();
    dd($items);
});
Route::get('cau2.7', function () {
    $items = DB::table('nha_cung_caps')
        ->select('TENHANG')
        ->join('mat_hangs', 'nha_cung_caps.MACONGTY', '=', 'mat_hangs.MACONGTY')
        ->where('TENCONGTY', 'Việt Tiến')
        ->get();
    dd($items);
});
Route::get('cau2.8', function () {
    $items = DB::table('loaihangs')
        ->select('TENLOAIHANG', 'TENCONGTY', 'DIACHI',)
        ->join('mat_hangs', 'loaihangs.MALOAIHANG', '=', 'mat_hangs.MALOAIHANG')
        ->join('nha_cung_caps', 'nha_cung_caps.MACONGTY', '=', 'mat_hangs.MACONGTY')
        ->where('TENLOAIHANG', 'thực phẩm')
        ->get();
    dd($items);
});
Route::get('cau2.9', function () {
    $items = DB::table('khach_hangs')
        ->select('khach_hangs.TENGIAODICH',)
        ->join('don_dat_hangs', 'khach_hangs.MAKHACHHANG', '=', 'don_dat_hangs.MAKHACHHANG')
        ->join('chi_tiet_dat_hangs', 'don_dat_hangs.SOHOADON', '=', 'chi_tiet_dat_hangs.SOHOADON')
        ->join('mat_hangs', 'chi_tiet_dat_hangs.MAHANG', '=', 'mat_hangs.MAHANG')
        ->where('TENHANG', 'thực phẩm loại 185')
        ->get();
    dd($items);
});
Route::get('cau2.10', function () {
    $items = DB::table('don_dat_hangs')
        ->select('TEN', 'HO', 'NGAYGIAOHANG', 'NOIGIAOHANG', 'don_dat_hangs.SOHOADON')
        ->join('nhan_viens', 'don_dat_hangs.MANHANVIEN', '=', 'nhan_viens.MANHANVIEN')
        ->where('SOHOADON', '1')
        ->get();
    dd($items);
});
Route::get('cau2.11', function () {
    $items = DB::table('nhan_viens')
        ->select('HO', 'TEN', 'NGAYSINH', DB::raw('sum(LUONGCOBAN + PHUCAP) as TIENCONGTYPHAITRA'))
        ->groupBy('MANHANVIEN')
        ->get();
    dd($items);
});
Route::get('cau2.12', function () {
    $items = DB::table('chi_tiet_dat_hangs')
        ->select('SOHOADON', DB::raw('sum(SOLUONG * GIABAN - MUCGIAMGIA)'))
        ->groupBy('SOHOADON')
        ->having('SOHOADON', '3')
        ->get();
    dd($items);
});
Route::get('cau2.14', function () {
    $items = DB::table('nhan_viens')
        ->select('HO', 'TEN', 'NGAYSINH',)
        ->groupBy('HO', 'TEN', 'NGAYSINH')
        ->havingRaw('COUNT(*) > 1')
        ->get();
    dd($items);
});
Route::get('cau2.16', function () {
    $items = DB::table('khach_hangs')
        ->select('khach_hangs.TENCONGTY', 'khach_hangs.TENGIAODICH', 'khach_hangs.DIACHI', 'khach_hangs.DIENTHOAI', 'nha_cung_caps.TENCONGTY', 'nha_cung_caps.TENGIAODICH', 'nha_cung_caps.DIACHI', 'nha_cung_caps.DIENTHOAI')
        ->join('nha_cung_caps', 'nha_cung_caps.DIACHI', '=', 'khach_hangs.DIACHI')
        ->get();
    dd($items);
});
Route::get('cau2.17', function () {
    $items = DB::table('mat_hangs')
        ->select('mat_hangs.*')
        ->leftJoin('chi_tiet_dat_hangs', 'mat_hangs.MAHANG', '=', 'chi_tiet_dat_hangs.MAHANG')
        ->where('chi_tiet_dat_hangs.MAHANG', '=', null)
        ->get();
    dd($items);
});
Route::get('cau2.18', function () {
    $items = DB::table('nhan_viens')
        ->select('nhan_viens.*')
        ->leftJoin('don_dat_hangs', 'nhan_viens.MANHANVIEN', '=', 'don_dat_hangs.MANHANVIEN')
        ->where('don_dat_hangs.SOHOADON', '=', null)
        ->get();
    dd($items);
});
Route::get('cau2.19', function () {
    $items = DB::table('nhan_viens')
        ->select('HO', 'TEN', 'LUONGCOBAN as LUONGCAONHATCONGTY')
        ->orderByRaw('LUONGCOBAN DESC')
        ->get();
    dd($items);
});
Route::get('cau2.20', function () {
    $items = DB::table('don_dat_hangs')
    ->join('chi_tiet_dat_hangs', 'don_dat_hangs.SOHOADON', '=', 'chi_tiet_dat_hangs.SOHOADON')
    ->select(DB::raw('sum(chi_tiet_dat_hangs.SOLUONG*chi_tiet_dat_hangs.GIABAN) as total, don_dat_hangs.SOHOADON'))
    ->groupBy('don_dat_hangs.SOHOADON')->get();
    dd($items);
});



