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
            'url' => '',
            'category_id' => 1,
        ]);
        DB::table('images')->insert([
            'id' => 2,
            'url' => '',
            'category_id' => 2,
        ]);
        DB::table('images')->insert([
            'id' => 3,
            'url' => '',
            'category_id' => 3,
        ]);
        DB::table('images')->insert([
            'id' => 4,
            'url' => '',
            'category_id' => 4,
        ]);
        DB::table('images')->insert([
            'id' => 5,
            'url' => '',
            'category_id' => 5,
        ]);
        DB::table('images')->insert([
            'id' => 6,
            'url' => '',
            'category_id' => 6,
        ]);
        DB::table('images')->insert([
            'id' => 7,
            'url' => '',
            'category_id' => 7,
        ]);
        DB::table('images')->insert([
            'id' => 8,
            'url' => '',
            'category_id' => 8,
        ]);
        DB::table('images')->insert([
            'id' => 9,
            'url' => 'upload/ApO9M3NFktqZGZrT7JcCkt84gROFWlYfivpTLi4o.jpeg',
            'product_id' => 1,
            'productMainImage' => 1,
        ]);
        DB::table('images')->insert([
            'id' => 10,
            'url' => 'upload/5Mi3H47klXjDOqKCpYIqHXIjInUzaO8GFXJppE1q.png',
            'product_id' => 2,
            'productMainImage' => 1,
        ]);
        DB::table('images')->insert([
            'id' => 11,
            'url' => 'upload/Oa9rO5srw50YR1G8GUj54wYrsg37lD3c5oMX39Rw.png',
            'product_id' => 3,
            'productMainImage' => 1,
        ]);
        DB::table('images')->insert([
            'id' => 12,
            'url' => 'upload/XAHzs4QmTqT4r8Gvir4YHk8RanzgwFnmHtHuHflV.png',
            'product_id' => 4,
            'productMainImage' => 1,
        ]);
        DB::table('images')->insert([
            'id' => 13,
            'url' => 'upload/JoeHe2dZgkIZdFs1ZpcWHaGJrCjxbY17kTuilU0N.png',
            'product_id' => 5,
            'productMainImage' => 1,
        ]);
    }
}
