<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function product(){

        $data = Product::all();
        return  view('product', ['products' => $data]);
    }

    public function detail($id){
      $data =   Product::find($id);
      return view('detail', ['product' => $data]);
        
    }

    public function addToCart(Request $req){
      if($req->session()->has('user')){
        // echo 'add to cart';
        $cart = new cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/product');

      }else {
        return redirect('login');
      }
    }

    static function cartItem(){
      $userId = Session::get('user')['id'];
      return cart::where('user_id', $userId)->count();
    }
}

