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
        $faker = Faker::create();
        for($i=0; $i<10; $i++){
            Product::create([
                "name" => "Sản phẩm ".$i,
                "description" => $faker->text(),
                "price" => 1000 +$i,
                "quantity" => $i
            ]);
        }
    }
}
