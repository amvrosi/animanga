<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartAddRequest;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $user_id = Auth::user()->id;
        $user_cart = Cart::where('user_id', 'like', "{$user_id}")->get();
        return view('product.cart', compact('user_cart'));
    }

    public function store(CartAddRequest $request){
        $cart = Cart::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);
        return redirect()->back()->with('success');
    }

    public function destroy(Cart $cart){
        $cart->delete();

        return redirect()->route('cart.index')->with('success');
    }
}
