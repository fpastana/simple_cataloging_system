<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = Product::create([
            'name' => 'Sik Sik Wat',
            'category_id' => 1,
            'sku' => 'DISH999ABCD',
            'price' => 13.49,
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $product2 = Product::create([
            'name' => 'Huo Guo',
            'category_id' => 2,
            'sku' => 'DISH234ZFDR',
            'price' => 11.99,
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $product3 = Product::create([
            'name' => 'Cau-Cau',
            'category_id' => 3,
            'sku' => 'DISH775TGHY',
            'price' => 15.29,
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
