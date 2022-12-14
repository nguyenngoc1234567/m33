<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
      $items = Product::all();
      return response()->json($items,200);
    }
    public function show($id){
        $items = Product::find($id);
      return response()->json($items,200);
    }
    public function store(Request $request){


        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        // $product->image = 'images/iphone-14.png';
        try {
            $product->save();
            return response()->json($product, 201);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 200);
        }

        // echo '<pre>';
        // print_r( $request->all() );
        // die();
    }
    public function update($id,Request $request){

        $product = Product::find($id);
        $product->name =$request->name;
        $product->price = $request->price;
        try {
            $product->save();
            return response()->json($product, 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 200);
        }
    }
    public function destroy($id){
        $product = Product::find($id);
        try {
            $product->delete();
            return response()->json($product, 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 200);
        }


    }
}
