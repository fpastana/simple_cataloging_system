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
            'name' => 'Ethiopia, Meat, Beef, Chili pepper'
        ]);

        $category2 = Category::create([
            'name' => 'China, Meat, Beef, Fish, Tofu, Sichuan pepper'
        ]);

        $category3 = Category::create([
            'name' => 'Peru, Potato, Yellow Chili pepper'
        ]);
    }
}
