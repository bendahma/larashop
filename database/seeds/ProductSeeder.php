<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Product 1',
            'price' => '10000.00',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Product 2',
            'price' => '10000.00',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Product 3',
            'price' => '10000.00',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Product 4',
            'price' => '10000.00',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Product 5',
            'price' => '10000.00',
            'category_id' => '1',
        ]);
    }
}
