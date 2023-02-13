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
            'file' => '',
            'enable' => '1'
        ]);
        Image::create([
            'name' => 'Mie Tektek Sosis',
            'file' => '',
            'enable' => '1'
        ]);
        Image::create([
            'name' => 'Banana Split',
            'file' => '',
            'enable' => '1'
        ]);
        Image::create([
            'name' => 'Pink Lava',
            'file' => '',
            'enable' => '1'
        ]);
        Image::create([
            'name' => 'Cappucino Ice',
            'file' => '',
            'enable' => '1'
        ]);
        Image::create([
            'name' => 'Telur Gulung',
            'file' => '',
            'enable' => '1'
        ]);
    }
}
