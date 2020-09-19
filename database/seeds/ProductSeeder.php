<?php

use Illuminate\Database\Seeder;
use App\Color;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'color' => 'black',
        ]);
        DB::table('colors')->insert([
            'color' => 'white',
        ]);
        DB::table('colors')->insert([
            'color' => 'red',
        ]);
        DB::table('colors')->insert([
            'color' => 'blue',
        ]);
        DB::table('colors')->insert([
            'color' => 'gray',
        ]);

        DB::table('products')->insert([
            'id' => 1,
            'name' => 'Samsung Galaxy S10+',
            'price' => '145000.00',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'id' => 2,
            'name' => 'iPhone X',
            'price' => '160000.00',
            'category_id' => '2',
        ]);
        DB::table('products')->insert([
            'id' => 3,
            'name' => 'OPPO F11 PRO',
            'price' => '60000.00',
            'category_id' => '4',
        ]);
        DB::table('products')->insert([
            'id' => 4,
            'name' => 'Huawei Y9 (2019)',
            'price' => '40000.00',
            'category_id' => '3',
        ]);
        DB::table('products')->insert([
            'id' => 5,
            'name' => 'Huawei P40 Pro (2020)',
            'price' => '200000.00',
            'category_id' => '3',
        ]);

        foreach (Product::all() as $p) {
            $colors = Color::find([1,2,3,4,5]);
            $p->colors()->attach($colors);
        }
       
    }
}
