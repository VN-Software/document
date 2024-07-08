<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cart::create(["user_id" => 1]);
        // Cart::create(["user_id" => 2]);
        // Cart::create(["user_id" => 3]);
        // Cart::create(["user_id" => 4]);
        // Cart::create(["user_id" => 5]);
        // Cart::create(["user_id" => 6]);
        $users = User::all();

        foreach ($users as $user) {
            Cart::create([
                'user_id' => $user->id,
            ]);
        }
    }
}
