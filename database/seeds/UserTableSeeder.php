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
            'firstName' => 'Bendahma',
            'lastName' => 'Amine',
            'DateOfBirth' => '1993-08-14',
            'phone' => '213666930103',
            'username' => 'bendahma',
            'email' => 'mkaddourbendahma@gmail.com',
            'password' => Hash::make('aaaaaaaa'),
            'role' => 'admin',
        ]);
    }
}
