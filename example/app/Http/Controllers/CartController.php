<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function addToCart(Request $request)
    {
        $idProduct = $request->input("idProduct");
        $product = DB::table('cart')->where("idproduct", $idProduct)->first();
        if (!$product) {
            DB::table('cart')->insert(['idproduct' => $idProduct]);
        } else {
            DB::table("cart")->where("idproduct", $idProduct)->update(["quantity" => $product->quantity + 1]);
        }

        return response()->json(['message' => 'success'], 200);
    }

    public function getCarts()
    {
        $cartList = [];
        $carts = DB::table('cart')->get();
        foreach ($carts as $cart) {
            $product =  DB::table('product')->where("id", $cart->idproduct)->first();
            $cartList[] =
                [
                    'id' => $cart->id,
                    'quantity' => $cart->quantity,
                    'product' => $product,
                ];
        }
        return response()->json($cartList);
    }

    public function deleteCartItem(Request $request)
    {
        print($request);
        $deleted = DB::table('cart')->where('id', $request->idCart)->delete();
        return response()->json(['message' => 'success'], 200);
    }

    public function truCartItem(Request $request){
        $idCart = $request->input("idCart");
        $cart = DB::table("cart")->where("id",$idCart)->first();
        DB::table("cart")->where("id",$idCart)->update(["quantity"=>$cart->quantity-1]);
    }
    public function congCartItem(Request $request)
    {
        $idCart = $request->input("idCart");
        $cart = DB::table("cart")->where("id", $idCart)->first();
        DB::table("cart")->where("id", $idCart)->update(["quantity" => $cart->quantity + 1]);
    }
}
