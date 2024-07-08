<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $categories = Category::all();
        $categories = Category::take(4)->get();
        Product::create(["name" => "ao nam", "description" => "ao nam có cổ dành cho nam cao 190cm", "price" => 100000, "quantity" => 123, "category_id" => $categories[0]->id]);
        Product::create(["name" => "ao polo", "description" => "ao nam có cổ dành cho nam mặc đẹp", "price" => 130000, "quantity" => 123, "category_id" => $categories[0]->id]);
        Product::create(["name" => "quần sort", "description" => "quan nam có cổ dành cho nam cao 190cm", "price" => 140000, "quantity" => 123, "category_id" => $categories[1]->id]);
        Product::create(["name" => "quần tây", "description" => "quan nam có cổ dành cho nam cao 190cm", "price" => 150000, "quantity" => 123, "category_id" => $categories[1]->id]);
        Product::create(["name" => "giày nam", "description" => "giay nam có cổ dành cho nam cao 190cm", "price" => 160000, "quantity" => 123, "category_id" => $categories[2]->id]);
        Product::create(["name" => "giày da", "description" => "giay nam có cổ dành cho nam cao 190cm", "price" => 170000, "quantity" => 123, "category_id" => $categories[2]->id]);
        Product::create(["name" => "mu nam", "description" => "mu nam có cổ dành cho nam cao 190cm", "price" => 180000, "quantity" => 123, "category_id" =>
        $categories[3]->id]);
        Product::create(["name" => "mũ lưỡi trai", "description" => "mu nam có cổ dành cho nam cao 190cm", "price" => 190000, "quantity" => 123, "category_id" => $categories[3]->id]);

    }
}
