<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Samsung',
            'order' => 1
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Appel',
            'order' => 2

        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Huawei',
            'order' => 3

        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Oppo',
            'order' => 4
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Xiaomi',
            'order' => 5
        ]);
        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'Realme',
            'order' => 6
        ]);
        DB::table('categories')->insert([
            'id' => 7,
            'name' => 'OnePlus',
            'order' => 7
        ]);
        DB::table('categories')->insert([
            'id' => 8,
            'name' => 'Accessoires',
            'order' => 8
        ]);
    }
}
