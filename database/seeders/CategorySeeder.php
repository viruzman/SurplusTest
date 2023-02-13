<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Main Course',
            'enable' => '1'
        ]);
        Category::create([
            'name' => 'Appetizer',
            'enable' => '1'
        ]);
        Category::create([
            'name' => 'Dessert',
            'enable' => '1'
        ]);
        Category::create([
            'name' => 'Drink',
            'enable' => '1'
        ]);
    }
}
