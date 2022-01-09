<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $all = Category::get();
        return view('category',['cates'=>$all]);

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
        $request->validate([
            'avatar'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $data = $request->validate([
            'name' => 'required',
        ]);

        $imageName = time().'.'.$request->avatar->extension();
        $data['avatar']=$imageName;
        $data['owner']=auth()->id();
        $data['updater']=auth()->id();
        $data['slug']=$request['slug'];
        $request->avatar->move(public_path('images'), $imageName);
//        dd($data);
        Category::create($data);
//        dd($data);
        return redirect()->route('cate.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cate = Category::where('id', $id)->first();
//        dd($product);
        return response()->json($cate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate_edit = Category::where('id', $id)->first();
        return redirect('cate')->with('cate_edit', $cate_edit);

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
        $request->validate([
            'avatar'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',

        ]);

        $imageName = time().'.'.$request->avatar->extension();
        $request->avatar->move(public_path('images'), $imageName);

        Category::where('id',$id)->update([
            'name'=>$request['name'],
            'avatar'=>$imageName,
            'updater'=>auth()->id(),
            'slug'=>$request['slug']


        ]);
        return redirect()->route('cate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd($id);
        try{
            Category::destroy($id);
            return response()->json(['success'=>true]);
        }catch (Exception $e){
//            return abort(404);
            dd($e);
            return  response()->json(['error'=>$e->getMessage()]);
        }
    }
}
