<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0 + 1; $i < 8 + 1; $i++) {
            for ($j = 0 + 1; $j < 8 + 1; $j++) {


                DB::table('articles')->insert([
                    'title' => 'テストです' . $i,
                    'body' => 'テストです' . $i,
                    'ch' => '' . $i,
                    'user_id' '' . $i,
                    'book_id' => '' . $j

                ]);
            }
        }
    }
}
