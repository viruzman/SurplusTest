<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create([
            'name' => 'Nasi Goreng Ayam',
            'file' => "storage/images/1676275339.jpg",
            'enable' => '1'
        ]);
        Image::create([
            'name' => 'Mie Tektek Sosis',
            'file' => "storage/images/1676278735.jpg",
            'enable' => '1'
        ]);
        Image::create([
            'name' => 'Banana Split',
            'file' => "storage/images/1676275350.jpg",
            'enable' => '1'
        ]);
        Image::create([
            'name' => 'Pink Lava',
            'file' => "storage/images/1676275381.jpg",
            'enable' => '1'
        ]);
        Image::create([
            'name' => 'Cappucino Ice',
            'file' => "storage/images/1676275398.jpg",
            'enable' => '1'
        ]);
        Image::create([
            'name' => 'Telur Gulung',
            'file' => "storage/images/1676275480.jpg",
            'enable' => '1'
        ]);
    }
}
