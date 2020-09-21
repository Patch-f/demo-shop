<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorys = \App\Models\Category::all();
        $products = \App\Models\Product::all();

        foreach ($products as $key => $value) {
            $value->categories()->attach($categorys->random(rand(1,5)));
        }
    }
}
