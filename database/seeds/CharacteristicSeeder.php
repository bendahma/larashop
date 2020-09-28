<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characteristics')->insert([
            'ReleasedDate' => '2018-10-01' ,
            'Network' => '2G,3G,4G,LTE' ,
            'Dimensions' => '128cm x 24cm x 5cm' ,
            'DisplaySize' => '6in' ,
            'DisplayResolution' => '400ppx' ,
            'OS' => 'Android 9',
            'product_id' => '1',
        ]);
    }
}
