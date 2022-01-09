<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\UserTable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $all = Product::get();
        $cate_all = Category::all();
        $request->session()->put('sscategory',$cate_all);
        return view('product',['products'=>$all,'cates'=>$cate_all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'avatar'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $data = $request->validate([
            'name' => 'required',
            'price'=>'required',
            'cate_id'=>'',
        ]);

        $imageName = time().'.'.$request->avatar->extension();
        $data['avatar']=$imageName;
        $data['owner']=auth()->id();
        $data['updater']=auth()->id();
        $request->avatar->move(public_path('images'), $imageName);
//        dd($data);
        Product::create($data);
//        dd($data);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
//        dd($id);
//        echo $id;
//        Product::where
        $product = Product::where('id', $id)->first();
//        dd($product);
        return response()->json($product);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(Request $request,int $id)
    {
        $product_edit = Product::where('id', $id)->first();
//        $cates=$request->session()->get('sscategory');
//        dd($cate);
//        dd($product);
//        return response()->json($product);
//        dd($product);
//        return redirect()->
//        return view('edit_product',['product'=>$product,'cates'=>$cates]);
//        return redirect()->route('product.index',compact('product_edit'));
        return redirect('product')->with('product_edit', $product_edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, int $id)
    {
//        dd("Da vao");

        $request->validate([
            'avatar'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'price'=>'required',
        ]);

        $imageName = time().'.'.$request->avatar->extension();
        $request->avatar->move(public_path('images'), $imageName);

        Product::where('id',$id)->update([
            'name'=>$request['name'],
            'avatar'=>$imageName,
            'price'=>$request['price'],
            'cate_id'=>$request['cate_id'],
            'updater'=>auth()->id()
        ]);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try{
            Product::destroy($id);
            return response()->json(['success'=>true]);
        }catch (\Exception $e){
            return abort(404);
        }
    }
}
