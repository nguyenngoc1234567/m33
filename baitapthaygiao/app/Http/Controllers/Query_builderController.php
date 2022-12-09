<?php

namespace App\Http\Controllers;

use App\Models\Query_builder;
use Illuminate\Http\Request;
use Illuminate\Queue\NullQueue;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\Group;

class Query_builderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // cau 2.1
        // $nha_cung_caps=DB::table('nha_cung_caps')->get();
        // dd($nha_cung_caps);
        // return view('user.index',compact('nha_cung_caps'));

        // cau 2.2
        // $mat_hangs=DB::table('mat_hangs')
        // ->select('MALOAIHANG','TENHANG','SOLUONG')
        // ->get();
        // dd($mat_hangs);
        // return view('user.index',compact('mat_hangs'));



        // cau 2.3
        // $nhan_viens=DB::table('nhan_viens')
        // ->select('HO','TEN','DIACHI','NGAYLAMVIEC')
        // ->get();
        // dd($nhan_viens);
        // return view('user.index',compact('nhan_viens'));


        // CAU2.4
        // $nha_cung_caps=DB::table('nha_cung_caps')
        // ->select('DIENTHOAI','DIACHI')
        // ->where('TENCONGTY','VINAMILK')
        // ->get();
        // dd($nha_cung_caps);
        // return view('user.index',compact('nha_cung_caps'));



        // CAU2.5
        // $mat_hangs=DB::table('mat_hangs')
        // ->select('TENHANG','MAHANG')
        // ->where('GIAHANG','>','100000','AND','SOLUONG','<','50')
        // ->get();
        // dd($mat_hangs);
        // return view('user.index',compact('mat_hangs'));


         // CAU2.6
        //  $nha_cung_caps=DB::table('nha_cung_caps')
        //  ->join('mat_hangs', 'nha_cung_caps.MACONGTY', '=', 'mat_hangs.MACONGTY')
        //  ->select('TENCONGTY as NHACUNGCAP','TENHANG')
        //  ->get();
        //  dd($nha_cung_caps);
        //  return view('user.index',compact('nha_cung_caps'));


        //  CAU2.7
        // $mat_hangs=DB::table('mat_hangs')
        //  ->select('TENHANG')
        //  ->where('MACONGTY','1')
        //  ->get();
        //  dd($mat_hangs);
        //  return view('user.index',compact('mat_hangs'));

        //  cau 2.10
        // $don_dat_hangs=DB::table('don_dat_hangs')
        // ->join('nhan_viens','don_dat_hangs.MANHANVIEN','=','nhan_viens.MANHANVIEN')
        //  ->select('nhan_viens.HO','nhan_viens.TEN','don_dat_hangs.NGAYGIAOHANG','don_dat_hangs.NOIGIAOHANG')
        //  ->where('SOHOADON','1')
        //  ->get();
        //  dd($don_dat_hangs);
        //  return view('user.index',compact('don_dat_hangs'));



        //  cau 2.11
        // $nhan_viens=DB::table('nhan_viens')
        //  ->select('HO','TEN','NGAYSINH', DB::raw('sum(LUONGCOBAN+PHUCAP) as TONG_TIEN_LUONG'))
        //  ->groupBy('MANHANVIEN')
        //  ->get();
        //  dd($nhan_viens);
        //  return view('user.index',compact('nhan_viens'));


        //  cau 2.12
        // $chi_tiet_dat_hangs = DB::table('chi_tiet_dat_hangs')
        // ->select('SOHOADON', DB::raw('sum(SOLUONG * GIABAN - MUCGIAMGIA)'))
        // ->groupBy('SOHOADON')
        // ->having('SOHOADON', '3')
        // ->get();
        //         dd($chi_tiet_dat_hangs);
        //         return view('user.index',compact('chi_tiet_dat_hangs'));




        // cau 2.16
        //  $khach_hangs=DB::table('khach_hangs')
        //  ->join('nha_cung_caps','khach_hangs.DIACHI','=','nha_cung_caps.DIACHI')
        //  ->select('khach_hangs.TENCONGTY','khach_hangs.TENGIAODICH','khach_hangs.DIACHI',
        //  'khach_hangs.DIENTHOAI','nha_cung_caps.TENCONGTY','nha_cung_caps.TENGIAODICH',
        //  'nha_cung_caps.DIACHI','nha_cung_caps.DIENTHOAI')
        //  ->get();
        //  dd($khach_hangs);
        //  return view('user.index',compact('khach_hangs'));


        // cau 2.17

                // $mat_hangs = DB::table('mat_hangs')
                // ->leftJoin('chi_tiet_dat_hangs', 'mat_hangs.MAHANG', '=', 'chi_tiet_dat_hangs.MAHANG')
                // ->select('*')
                // ->where('chi_tiet_dat_hangs.MAHANG', '=', null)
                // ->get();
                // dd($mat_hangs);
                // return view('user.index',compact('mat_hangs'));


        // cau 2.18
                // $nhan_viens = DB::table('nhan_viens')
                // ->leftJoin('don_dat_hangs','nhan_viens.MANHANVIEN','=','don_dat_hangs.MANHANVIEN')
                // ->select('nhan_viens.*')
                // ->where('don_dat_hangs.SOHOADON','=',null)
                // ->get();
                // dd($nhan_viens);
                // return view('user.index',compact('nhan_viens'));



        // cau 2.19

                // $nhan_viens = DB::table('nhan_viens')
                // ->select('*', DB::raw('max(LUONGCOBAN)'))
                // ->groupBy('MANHANVIEN')
                // ->get();
                // dd($nhan_viens);
                // return view('user.index',compact('nhan_viens'));




                // cau 2.20
                // $chi_tiet_dat_hangs = DB::table('chi_tiet_dat_hangs')
                // ->join('mat_hangs','chi_tiet_dat_hangs.MAHANG','=','mat_hangs.MAHANG')
                // ->join('don_dat_hangs','chi_tiet_dat_hangs.SOHOADON','=','don_dat_hangs.SOHOADON')
                // ->join('khach_hangs','don_dat_hangs.MAKHACHHANG','=','khach_hangs.MAKHACHHANG')
                // ->select('khach_hangs.TENCONGTY','mat_hangs.TENHANG','chi_tiet_dat_hangs.SOLUONG','chi_tiet_dat_hangs.GIABAN',
                // DB::raw('sum(chi_tiet_dat_hangs.SOLUONG*chi_tiet_dat_hangs.GIABAN )'))
                // ->groupBy('chi_tiet_dat_hangs.SOHOADON')
                // ->get();
                // dd($chi_tiet_dat_hangs);
                // return view('user.index',compact('chi_tiet_dat_hangs'));

                $chi_tiet_dat_hangs = DB::table('chi_tiet_dat_hangs')
                ->join('don_dat_hangs', 'chi_tiet_dat_hangs.SOHOADON', '=', 'don_dat_hangs.SOHOADON')
                ->select(DB::raw('sum(chi_tiet_dat_hangs.SOLUONG*chi_tiet_dat_hangs.GIABAN) as total, don_dat_hangs.SOHOADON'))
                ->groupBy('don_dat_hangs.SOHOADON')
                ->get();
                dd($chi_tiet_dat_hangs);
                return view('user.index',compact('chi_tiet_dat_hangs'));




    }

   
}
