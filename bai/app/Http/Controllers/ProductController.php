<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBlogPost;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{

    public function index()
    {

    }
    public function create()
    {
        return view('admin.create');
    }


    // public function store(Request $request)
    // {
    //     // Validation cach 1
    //     // $validated = $request->validate([
    //     //     'name' => 'required|unique:products|max:255',
    //     //     'price' => 'required',
    //     //     'description' => 'required|min:3',
    //     // ],[
    //     //     'name.required'=> 'vui long nhap ten',
    //     //     'name.unique'=> 'ten da ton tai ',
    //     //     'name.max'=>'ten qua dai',
    //     //     'price.required'=>'vui long nhap gia',
    //     //     'description.required'=>'vui long nhap mo ta',
    //     //     'description.min'=> 'mo ta qua ngan'
    //     // ]);

    //       // Validation cach 2
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|max:255',
    //         'price' => 'required',
    //         'description' => 'required|min:3',
    //     ],[
    //         'name.required'=> 'vui long nhap ten',
    //         'name.unique'=> 'ten da ton tai ',
    //         'name.max'=>'ten qua dai',
    //         'price.required'=>'vui long nhap gia',
    //         'description.required'=>'vui long nhap mo ta',
    //         'description.min'=> 'mo ta qua ngan'
    //     ]);
    //     if ($validator->fails()) {
    //         return redirect()->route('admin.create')
    //                     ->withErrors($validator)
    //                     ->withInput();
    //     }
    //      // Luu
    //      $product = new Product();
    //      $product->name = $request->name;
    //      $product->price = $request->price;
    //      $product->description = $request->description;

    // }
    public function store(StoreBlogPost $request ){
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image = 'images/iphone-14.png';

        try {
            $product->save();//throw new Exection('Co loi xay ra');
        } catch (\Exception $e) {
            // Logic khi sai
            Log::error($e->getMessage());
            return redirect()->route('products.create')->with('error','Da co loi xay ra');
        }
        return redirect()->route('products.index')->with('success','Luu thanh cong');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
