<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\CartLine;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carts = Cart::take(1)->get();
        $products = Product::take(2)->get();
        CartLine::create(["cart_id"=> $carts[0]->id,"product_id"=> $products[0]->id,"quantity"=>3]);
        CartLine::create(["cart_id" => $carts[0]->id, "product_id" => $products[1]->id, "quantity" => 6]);
    }
}
