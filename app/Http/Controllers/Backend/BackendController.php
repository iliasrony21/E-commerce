<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Image;
use File;

class BackendController extends Controller
{
    public function index(){
        return view('backend.product.add');
    }
    public function store(Request $request){
        $request->validate([

            'name' =>'required',
            'category_name' => 'required',
            'brand_name' => 'required',
            'description'=>'required',
            'image' =>'required',
        ]);
        $pImage="";
        // $product = new Product;
        if($request->image){
            $image = $request->file('image');
            $customName = rand().".".$image->getClientOriginalExtension();
            $location = public_path("product/".$customName);
            'Image'::make($image)->resize(300,200)->save($location);
            $pImage = $customName;
        }
        $pid = Product::insertGetId([
            'name' => $request->name,
            'category_name' => $request->category_name,
            'brand_name' => $request->brand_name,
            'description' => $request->description,
            'image' => $pImage,
        ]);


        return back();




    }
    public function show(){

       $products =  Product::all();

        return view('backend.product.manage',compact("products"));

   }
    function edits($id){
    $product = Product::find($id);
    return view("backend.product.edit",compact("product"));
   }
   public function update(Request $request, $id){
    $product = Product::find($id);
    if($request->image){
        if('File'::exists(public_path("product/".$product->image))){

            'File'::delete(public_path("product/".$product->image));
            $image =  $image = $request->file('image');
            $customName = rand().".".$image->getClientOriginalExtension();
            $location = public_path("product/".$customName);
            'Image'::make($image)->resize(300,200)->save($location);
            $product->image = $customName;
            $product->update();
        }
    }

        $product->name = $request->name;
        $product->category_name = $request->category_name;
        $product->brand_name = $request->brand_name;
        $product->description = $request->description;
        $product->update();

    return back();
   }
   public function alldelete($id){
    $product = Product::find($id);
    $product->delete();
    return back();
   }
}
