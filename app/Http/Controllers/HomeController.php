<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

use Session;
use Stripe;
use  App\Models\category;
use  App\Models\product;
use  App\Models\cart;
use  App\Models\order;

class HomeController extends Controller
{

    public function index()
    {
        $products=product::paginate(9);
        return view("home.userpage",compact('products'));
    }
    public function redirect()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
    
            if ($userType == "1") {
                return view("admin.home");
            } else {
                $products=product::paginate(9);
                return view("home.userpage",compact('products'));
                return view("home.userpage");
            }
        } else {
            // Handle the case where the user is not authenticated
            return redirect()->route('login'); // You can change 'login' to the route you use for the login page
        }
    }
    public function product_detail($id){
         $data=product::find($id);

        return view("home.detail",compact("data"));


    }
    public function add_cart(Request $req,$id)
    {
         if(Auth::id())
         {
            $user=Auth::User();
            $product=product::find($id);
            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
            $cart->title=$product->title;
            if($product->discount_price)
            {
                $cart->price=($product->discount_price)*($req->quantity);

            }
          
            
            else{
                $cart->price=($product->price) * ($req->quantity);
            }
            $cart->price=$product->price;
            $cart->quantity=$req->quantity;
            $cart->product_id=$product->id;
            $cart->image=$product->image;

             $cart->save();
            return redirect()->back();
         }
         else{
            return redirect("login");
         }
    }

    public function show_cart()
    {
        if(Auth::id()){
            $id=Auth::user()->id;
            $cart=cart::where("user_id",$id)->get();
            return view("home.show_cart",compact("cart"));

        }
        else{
            return redirect()->back();
        }

      
    }
    public function remove_cart($id){

        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back();
    }
    public function cash_order()
    {
        $user_id=Auth::user()->id;
        $data=cart::where("user_id",$user_id)->get();

        foreach($data as $data)
        {
            $order=new order;
            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->id;
            $order->title=$data->title;

            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->product_id=$data->product_id;
            $order->payment_status="cash on delivery";
            $order->delivery_status="processing";
            $order->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();
             
        }
        return redirect()->back();
    }
    public function stripe($totalprice){
        return view("home.stripe",compact("totalprice"));

    }

    // public function stripe()
    // {
    //     return view('stripe');
    // }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request,$totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thank's for payment"
        ]);
        $user_id=Auth::user()->id;
        $data=cart::where("user_id",$user_id)->get();

        foreach($data as $data)
        {
            $order=new order;
            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->id;
            $order->title=$data->title;

            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->product_id=$data->product_id;
            $order->payment_status="Paid";
            $order->delivery_status="processing";
            $order->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();
             
        }
      
        Session::flash('success', 'Payment successful!');
              
        return redirect('show_cart');
    }

    
}
