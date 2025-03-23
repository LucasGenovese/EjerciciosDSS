<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder {
    public function run() {
        $categories = DB::table('categories')->get();

        $products = [
            'Procesadores' => [
                ['name' => 'Intel i9', 'price' => 450],
                ['name' => 'AMD Ryzen 9', 'price' => 400]
            ],
            'Discos duros' => [
                ['name' => 'SSD 1TB', 'price' => 120],
                ['name' => 'HDD 2TB', 'price' => 80]
            ]
        ];

        foreach ($categories as $category) {
            foreach ($products[$category->name] as $product) {
                DB::table('products')->insert([
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'category_id' => $category->id
                ]);
            }
        }
    }
}

