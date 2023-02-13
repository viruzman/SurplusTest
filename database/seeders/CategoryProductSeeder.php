<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryProduct;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryProduct::create([
            'product_id' => 1,
            'category_id' => 1
        ]);
        CategoryProduct::create([
            'product_id' => 2,
            'category_id' => 1
        ]);
        CategoryProduct::create([
            'product_id' => 3,
            'category_id' => 3
        ]);
        CategoryProduct::create([
            'product_id' => 4,
            'category_id' => 4
        ]);
        CategoryProduct::create([
            'product_id' => 5,
            'category_id' => 4
        ]);
        CategoryProduct::create([
            'product_id' => 6,
            'category_id' => 2
        ]);
    }
}
