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
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Laptops (PC)',
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Computers',
        ]);
    }
}
