<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::all();
        return view ('categorys.index')->with('categorys', $categorys);
    }


    public function create()
    {
        return view('categorys.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Category::create($input);
        return redirect('category')->with('flash_message', 'category Addedd!');
    }


    public function show($id)
    {
        $category = Category::find($id);
        return view('categorys.show')->with('categorys', $category);
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('categorys.edit')->with('categorys', $category);
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $input = $request->all();
        $category->update($input);
        return redirect('category')->with('flash_message', 'category Updated!');
    }


    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('category')->with('flash_message', 'category deleted!');
    }
}
