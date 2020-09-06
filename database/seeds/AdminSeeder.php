<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'user_id' => 1,
        ]);
        
    }
}
