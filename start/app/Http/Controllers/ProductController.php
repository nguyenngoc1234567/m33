<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
       $items = Product::all();
    //    $items = Product::where('id','>',5)->get();
    $items = DB::table('products')->get();
    //
        dd($items);
    }
    public function create(){

    }
    public function store(Request $request ){

    }
    public function show($id){
        $item =Product::find($id);
        // $item =DB::table('products')->where('id','=',$id)->first();
        //
        dd($item);
    }
    public function edit($id){

    }
    public function update(Request $request , $id){

    }
    public function destroy($id){

    }
}
