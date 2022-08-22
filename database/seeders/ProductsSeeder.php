<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 20; $i++) {
            DB::table('products')->insert([
                'name' => Str::random(10),
                'img' => rand(0, 1) ? null : 'https://via.placeholder.com/300',
                'price' => round(rand(1, 10000) / 100, 2)
            ]);
        }
    }
}
