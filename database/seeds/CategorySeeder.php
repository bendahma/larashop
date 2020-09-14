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
            'name' => 'Smartphone',
            'order' => 1
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'PC',
            'order' => 2

        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Ordinateur',
            'order' => 3
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Accessoire',
            'order' => 4
        ]);
    }
}
