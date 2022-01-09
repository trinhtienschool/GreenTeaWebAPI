<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('category')->get();
        $categories = Category::with('products')->get();

        return view('products.index', compact('products', 'categories'));
    }

    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Product::create($input);
        return redirect('product')->with('flash_message', 'product Addedd!');
    }


    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->with('products', $product);
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit')->with('products', $product);
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect('product')->with('flash_message', 'Product Updated!');
    }


    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('product')->with('flash_message', 'product deleted!');
    }
}
