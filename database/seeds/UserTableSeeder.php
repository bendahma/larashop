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
            'id' => 1,
            'firstName' => 'Bendahma',
            'lastName' => 'Amine',
            'DateOfBirth' => '1993-08-14',
            'phone' => '213666930103',
            'username' => 'bendahma',
            'email' => 'mkaddourbendahma@gmail.com',
            'password' => Hash::make('aaaaaaaa'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'firstName' => 'Kaddour',
            'lastName' => 'Mohamed',
            'DateOfBirth' => '1992-09-17',
            'phone' => '213778923641',
            'username' => 'kaddour',
            'email' => 'mohamedKaddour@gmail.com',
            'password' => Hash::make('aaaaaaaa'),
            'role' => 'manager',
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'firstName' => 'tom',
            'lastName' => 'Hardy',
            'DateOfBirth' => '1992-09-17',
            'phone' => '+213666930103',
            'username' => 'tom',
            'email' => 'tomhardy@gmail.com',
            'password' => Hash::make('aaaaaaaa'),
            'role' => 'client',
        ]);
    }
}
