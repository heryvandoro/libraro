<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = 'Sample Books '.rand(1,100);
        DB::table('books')->insert([
            'title' => $title,
            'slug' => str_slug($title, "-"),
            'writer' => 'Writer '.rand(1,10),
            'stock' => rand(1,10),
            'release_date' => date("Y-m-d"),
            'cover' => 'cover'.rand(1,5).'.jpg',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis voluptate quam sint consectetur dicta eius nobis,ratione dolorum dolor odio nam suscipit officia? Harum doloribus ducimus quis voluptatum vitae cupiditate.',
        ]);
    }
}
