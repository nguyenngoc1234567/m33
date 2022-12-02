<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControler extends Controller
{
    public function index()
    {
       echo'trang danh sach'; 
       return view('products.index');
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        
    }
     
    public function show($id)
    {
        return view('products.show');  
    }
    public function edit($id)
    {
        return view('products.edit');
    }
    public function update(Request $request,$id)
    {
        
    }
    //xoa
    public function destroy($id)
    {
        
    }
}


   
