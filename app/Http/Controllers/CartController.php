<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cart;

class CartController extends Controller
{
    public function cart()
    {
        $cartItems = DB::table('cart')
            ->join('products', 'cart.productId', '=', 'products.id')
            ->select('products.id', 'products.name', 'products.photo', 'products.price', 'cart.amount')
            ->get();

        return view('cart', compact('cartItems'));
    }

    public function addToCart($id)
    {
        $cartId = DB::table('cart')
            ->select('id')
            ->where('productId', $id)
            ->value($id);

        if (!$cartId) {
            DB::table('cart')->insert(
                ['userID' => 2, 'productId' => $id, 'amount' => 1]
            );
        } else {
            $cart = Cart::find($cartId);
            $amount = $cart->amount + 1;
            DB::table('cart')
                ->where('id', $cartId)
                ->update(['amount' => $amount]);
        }
        return redirect()->back()->with('alert', 'deleted');
    }

    public function updateCartProduct($id, Request $request)
    {
        $name = $request->input('amount');

        Cart::where('productId', '=', $id)->update(array('amount' => $name));

        return redirect()->back();
    }

    public function deleteFromCart($id)
    {
        $cartId = DB::table('cart')
            ->select('id')
            ->where('productId', $id)
            ->value($id);

        DB::table('cart')->where('id', '=', $cartId)->delete();
        return redirect()->back();
    }
}
