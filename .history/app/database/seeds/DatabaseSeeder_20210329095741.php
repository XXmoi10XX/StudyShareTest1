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
        $this->call(BookTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
