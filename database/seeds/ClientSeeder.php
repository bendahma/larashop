<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'addressOne' => 'N° 88 cite lamitier',
            'addressTwo' => '11 cite ccls',
            'commune' => 'Ain Temouchent',
            'wilaya' => 'Ain Temouchent',
            'user_id' => 3,
        ]);
    }
}
