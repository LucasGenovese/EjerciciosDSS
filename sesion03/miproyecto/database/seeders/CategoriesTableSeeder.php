<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder {
    public function run() {
        DB::table('categories')->insert([
            ['name' => 'Procesadores'],
            ['name' => 'Discos duros']
        ]);
    }
}
