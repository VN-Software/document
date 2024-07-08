<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("vi");
        for($i =0; $i < 10; $i++){
            Product::create([
                "name" => "Sản phẩm ".$i,
                "disciption" => $faker->text(),
                "price" => "100" + $i,
                "quantity" => $i
            ]);
        }
    }
}
