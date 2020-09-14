<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'id' => 1,
            'url' => 'upload/glRobipLvGLyctfxrMrU586djwWnS2KHwtFUqeYk.jpeg',
            'category_id' => 1,
        ]);
        DB::table('images')->insert([
            'id' => 2,
            'url' => 'upload/0KT9AgHHjD38jZnLZ5JwfHOjYjavqq2GL1lmeyI4.jpeg',
            'category_id' => 2,
        ]);
        DB::table('images')->insert([
            'id' => 3,
            'url' => 'upload/cAOT1tPmnBpMl3QVriun9CeTzZzYG30yseKvOWwv.jpeg',
            'category_id' => 3,
        ]);
        DB::table('images')->insert([
            'id' => 4,
            'url' => 'upload/cAOT1tPmnBpMl3QVriun9CeTzZzYG30yseKvOWwv.jpeg',
            'category_id' => 4,
        ]);
    }
}
