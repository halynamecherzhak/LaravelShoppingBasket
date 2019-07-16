<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\User;
use App\Cart;

class CartController extends Controller
{
    public  function cart()
    {
        $cartItems = Cart::all();
        return view('cart', compact('cartItems'));
    }

    public function addToCart($id)
    {
        $cartId =  DB::table('cart')
            ->select('id')
            ->where('productId',$id)
            ->value($id);

        if(!$cartId )
        {
            DB::table('cart')->insert(
                ['userID' => 2, 'productId' => $id , 'amount' => 1]
            );
        }

        else
        {
            $cart = Cart::find($cartId);
            $amount = $cart->amount+1;
            DB::table('cart')
                ->where('id', $cartId)
                ->update(['amount' => $amount]);
        }
        return redirect()->back()->with('alert','deleted');

    }

    public function update()
    {

    }

    public function deleteFromCart()
    {

    }
}
