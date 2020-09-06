<?php

use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managers')->insert([
            'salaire' => 25000,
            'bonus' => 10000,
            'user_id' => 2,
        ]);
    }
}
