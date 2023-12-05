<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\category;
use  App\Models\product;
use  App\Models\order;

class AdminController extends Controller
{
    

    public function view_category()
    {
        $data=category::all();

        return view("admin.category",compact("data"));
    }
    public function add_category(Request $req){
        $data=new category;
        $data->category_name=$req->category;
        $data->save();
        return redirect()->back()->with("message","data store successfully");



    }
    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function view_product()
    {
        $data=category::all();

        return view("admin.product",compact("data"));
    }
    public function add_product(Request $req)
    {
         $product=new product;
         $product->title=$req->title;
         $product->description=$req->description;
         $product->price=$req->price;
         $product->discount_price=$req->discount_price;
         $product->category=$req->category;
         $product->quantity=$req->quantity;
         $image=$req->image;
         $imagname=time().'.'.$image->getClientOriginalExtension();

         $req->image->move("product",$imagname);
         $product->image=$imagname;
         $product->save();

         return redirect()->back();

    }
    public function show_product(){
        $data=product::latest()->get();

        return  view("admin.show_product",compact("data"));
    }
    public function product_delete($id)
    {
        $data=product::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function product_update($id)
    {
        $data=product::find($id);
        $category=category::all();
        return view("admin.product_update",compact("data","category"));
    }
    public function updated(Request $req,$id)
    {
        $product=product::find($id);
        $product->title=$req->title;
         $product->description=$req->description;
         $product->price=$req->price;
         $product->discount_price=$req->discount_price;
         $product->category=$req->category;
         $product->quantity=$req->quantity;
         $image=$req->image;
         if($image)
         {
            $imagname=time().'.'.$image->getClientOriginalExtension();

            $req->image->move("product",$imagname);
            $product->image=$imagname;
         }
        
         $product->save();

         return redirect()->back();

    }
  
    public function order_show()
    {

        $data=order::all();
        return view("admin.order_show",compact("data"));
    }

}