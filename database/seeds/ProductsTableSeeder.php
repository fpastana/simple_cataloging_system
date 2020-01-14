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
            'name' => 'Aspartame',
            'category_id' => 1,
            'sku' => '123',
            'price' => '30',
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $product2 = Product::create([
            'name' => 'Brilliant blue FCF',
            'category_id' => 1,
            'sku' => '111',
            'price' => '45',
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $product3 = Product::create([
            'name' => 'Zeaxanthin, synthetic',
            'category_id' => 2,
            'sku' => '132',
            'price' => '44',
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $product4 = Product::create([
            'name' => 'Aspartame',
            'category_id' => 2,
            'sku' => '122',
            'price' => '44',
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $product5 = Product::create([
            'name' => 'Aspartame',
            'category_id' => 2,
            'sku' => '213',
            'price' => '51',
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $product6 = Product::create([
            'name' => 'Aspartame',
            'category_id' => 2,
            'sku' => '345',
            'price' => '31',
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $product7 = Product::create([
            'name' => 'Aspartame',
            'category_id' => 3,
            'sku' => '120',
            'price' => '22',
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $product8 = Product::create([
            'name' => 'Aspartame',
            'category_id' => 3,
            'sku' => '257',
            'price' => '21',
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $product9 = Product::create([
            'name' => 'Aspartame',
            'category_id' => 3,
            'sku' => '987',
            'price' => '23.5',
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $product10 = Product::create([
            'name' => 'Aspartame',
            'category_id' => 3,
            'sku' => '444',
            'price' => '15.9',
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
