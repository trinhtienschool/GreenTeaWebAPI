<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index()
    {
        return view("category");
    }

    public function create()
    {
        $categories = Category::all();
        return view('category',compact('categories'));
    }

    public static function getListCategories(){
        $categories = Category::all();
        return $categories;
    }

    public static function getId(string $idval)
    {
        $categories = DB::table('categories')
                        ->where('id','=',$idval)
                        ->first();
        if($categories==null){
            return null;
        }
        return $categories->name;
    }

    public function store(Request $request)
    {
        $cate = new Category();
        $cate->name = $request->input('prname');
        $cate->quantity = $request->input('prquantity');
       $cate->save();
        return redirect('category')->with('flash_message','Category Added!');
    }

    public function show($id)
    {
        $cate = Category::find($id);
        return view('category.show')->with('categories',$cate);
    }

    public function edit($id)
    {
        $cate = Category::find($id);
        return view('category.edit')->with('categories',$cate);
    }


    public function update(Request $request,$id)
    {
        $cate = Category::find($id);
        $cate->name = $request->input('prnameedit');
        $cate->quantity = $request->input('prquantityedit');
        $cate->update();
        return redirect('category')->with('flash_message','Category Updated!');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('category')->with('flash_message','Category Deleted');
    }
}
