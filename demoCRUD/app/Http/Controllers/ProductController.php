<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{

    public function index()
    {
        return view('product');
    }
public static function getListProduct(){
        $product = Product::all();
        return $product;
}
    public function create()
    {
        return view('product');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('prname');
        $product->price = $request->input('prprice');
        $product->image = $request->input('supportRequest');
        $product->categoryId = $request->input('prcategory');
        $product->save();
        return redirect('product')->with('flash_message','Product Added!');
    }

    public function show($id)
    {
        $pr = Product::find($id);
        return view('product.show')->with('products',$pr);
    }

    public function edit($id)
    {
        $pr = Product::find($id);
        return view('product.edit')->with('products',$pr);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('prnameedit');
        $product->price = $request->input('prpriceedit');
        $product->image = $request->input('supportRequestEdit');
        $product->categoryId = $request->input('prcategoryedit');
        $product->update();
        return redirect('product')->with('flash_message','Product Updated');
    }

    public function destroy($id)
    {
       Product::destroy($id);
       return redirect('product')->with('flash_message','Product Deleted!');
    }
}
