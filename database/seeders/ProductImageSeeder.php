<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::create([
            'product_id' => 1,
            'image_id' => 1
        ]);
        ProductImage::create([
            'product_id' => 2,
            'image_id' => 2
        ]);
        ProductImage::create([
            'product_id' => 3,
            'image_id' => 3
        ]);
        ProductImage::create([
            'product_id' => 4,
            'image_id' => 4
        ]);
        ProductImage::create([
            'product_id' => 5,
            'image_id' => 5
        ]);
        ProductImage::create([
            'product_id' => 6,
            'image_id' => 6
        ]);
    }
}
