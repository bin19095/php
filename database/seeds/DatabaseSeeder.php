<?php

use Illuminate\Database\Seeder;
Use App\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	factory(Post::class,30)->create();
    }
}
