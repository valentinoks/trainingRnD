<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Star Wars',
            'description' => 'Perang Bintang',
            'author' => 'J.J Abrams'
        ]); 
        //kiri di table post
        DB::table('posts')->insert([
            'title' => 'Jurassic Park',
            'description' => 'Dinosaurus',
            'author' => 'Steven Spielberg'
        ]);

        DB::table('posts')->insert([
            'title' => 'The Hobbit',
            'description' => 'Prequel LOTR',
            'author' => 'Tolkien'
        ]);
    }
}
