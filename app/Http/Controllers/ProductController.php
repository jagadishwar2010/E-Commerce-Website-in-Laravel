<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function index() {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    function details($id) {
        $data = Product::find($id);
        return view('details', ['product'=>$data]);
    }

    function search (Request $req) {
        $data =  Product::
                 where('name', 'like', '%'.$req->input('query').'%')
                 ->get();
        return view('search', ['products'=>$data, 'Request' => $req]);
    }

    function addToCart (Request $req) {
        if($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else {
            return redirect('/login');
        }

    }

    static function cartItem () {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cartList () {
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();
        return view('cartList', ['products'=>$products]);
    }

    function removeFromCart ($id) {
        Cart::destroy($id);
        return redirect('/cartList');
    }

    function orderNow () {
        $userId = Session::get('user')['id'];
        $total = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        return view('ordernow', ['total'=>$total]);
    }

    function placeOrder (Request $req) {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->user_id = $cart['user_id'];
            $order->product_id = $cart['product_id'];
            $order->status = "Pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "Pending";
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        return redirect('/');
    }

    function myOrders () {
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
                    ->join('products', 'orders.product_id', '=', 'products.id')
                    ->where('orders.user_id', $userId)
                    ->get();
        return view('myorders', ['orders'=>$orders]);
    }

}
