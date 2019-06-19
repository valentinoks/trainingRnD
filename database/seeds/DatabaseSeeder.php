<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class); Eloquent->model query->DB
       factory(App\Post::class, 50)->create();
       factory(App\Comment::class, 50)->create();
    }
}
