<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name' => 'Flavoured fluid milk drinks'
        ]);

        $category2 = Category::create([
            'name' => 'Snacks - fish based'
        ]);

        $category3 = Category::create([
            'name' => 'Snacks - potato, cereal, flour or starch based (from roots and tubers, pulses and legumes)'
        ]);
    }
}
