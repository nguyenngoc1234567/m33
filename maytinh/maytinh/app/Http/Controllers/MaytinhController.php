<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaytinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sothunhat = $request->number1;
        $pheptinh = $request->pheptinh;
        $sothuhai = $request->number2;

        if(!empty($sothunhat)  && !empty($sothuhai) ){

            switch ($pheptinh) {
                case "+":
                  $ketqua= $sothunhat + $sothuhai;
                  echo $ketqua;
                  break;
                case "-":
                    $ketqua = $sothunhat - $sothuhai;
                    echo $ketqua;

                  break;
                case "*":
                    $ketqua = $sothunhat *$sothuhai;
                  echo $ketqua;


                  break;
                  case "/":
                    if ($sothuhai == 0){
                        echo "không chia được cho số 0 ";
                    }else{
                        $ketqua = $sothunhat / $sothuhai;
                  echo $ketqua;
                }
                    break;
              }
          }
          else{
            echo "vui lòng nhập số";
          }
          return view('maytinh');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}