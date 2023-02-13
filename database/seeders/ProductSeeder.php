<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Nasi Goreng Ayam',
            'description' => 'Nasi diolah dengan rempah pilihan dengan telur dan ayam',
            'enable' => '1'
        ]);
        Product::create([
            'name' => 'Mie Tektek Sosis',
            'description' => 'Mie diolah dengan rempah pilihan dengan telur dan sosis',
            'enable' => '1'
        ]);
        Product::create([
            'name' => 'Banana Split',
            'description' => 'Ice cream vanila, stoberi dan coklat dipadukan dengan potongan pisang',
            'enable' => '1'
        ]);
        Product::create([
            'name' => 'Pink Lava',
            'description' => 'Minuman dengan stoberi dan susu manis',
            'enable' => '1'
        ]);
        Product::create([
            'name' => 'Cappucino Ice',
            'description' => 'Kopi Cappucino dingin',
            'enable' => '1'
        ]);
        Product::create([
            'name' => 'Telur Gulung',
            'description' => 'Telur digoreng lalu digulung dengan stik',
            'enable' => '1'
        ]);
    }
}
