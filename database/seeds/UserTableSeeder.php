<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bendahma amine',
            'email' => 'bendahma@laraprint.com',
            'password' => Hash::make('aaaaaaaa'),
        ]);
    }
}
