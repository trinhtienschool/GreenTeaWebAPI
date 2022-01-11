<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Manager;
use App\Models\User;
use Illuminate\Support\Facades\File;
class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $manager = Manager::all();
        $user = User::all();
        return view('admin.users.product',compact('product','manager','user'), ['title' => 'product'],);
    }

    public function edit($id)
    {

        $product = Product::find($id);
        $manager = Manager::all();
        $user = User::all();
        return view('admin.users.menus.edit',compact('product','manager','user'), ['title' => 'edit']);
    }


    public function add()
    {
        $product = Product::all();
        $manager = Manager::all();
        $user = User::all();
        return view('admin.users.menus.add',compact('product','manager','user'), ['title' => 'add']);
    }
    public function handle_edit(Request $request,$id)
    {
        $product = Product::find($id);
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('storage/uploads'), $file_name);
            $image_path = "D:\\XAMPP\\htdocs\\laravelApp\\public\\storage\\uploads\\" .$product->image;  // Value is not URL but directory file path
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
        }else{
            $file_name = $product->image;
        }


            Product::find($id)->update([
                'product_name' => trim($request->input('product_name')),
                'price' => (int) ($request->input('price')),
                'user_id' => ($request->input('user_id')),
                'manager_id' => ($request->input('manager_id')),
                'description' => (String)($request->input('description')),
                'image' => $file_name,
                'status' => $request->input('status'),
            ]);
        return redirect()->route('product');
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $image_path = "D:\\XAMPP\\htdocs\\laravelApp\\public\\storage\\uploads\\" .$product->image;  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        Product::find($id)->delete();

        return redirect()->back();
    }


    public function handle_add(Request  $request){
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('storage/uploads'), $file_name);
        }
//        $image = $request->file('file');
//        $storedPath = $image->move('images', $image->getClientOriginalName());

        $product= Product::create([
            'product_name' => trim($request->input('product_name')),
            'price' => (int) ($request->input('price')),
            'user_id' => ($request->input('user_id')),
            'manager_id' => ($request->input('manager_id')),
            'description' => (String)($request->input('description')),
            'image' => $file_name,
            'status' => $request->input('status'),

        ]);


        return redirect()->route('product');

    }
}
