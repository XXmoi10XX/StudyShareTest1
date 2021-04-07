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
        DB::table('articles')->insert([
            'title' => 'PHPフレームワークLaravel入門 第2版',
            'auth' => '掌田 津耶乃',
            'body' => '人気No.1フレームワークのロングセラー定番解説書が、新バージョン対応で改訂!Laravel6、PHP7.2対応。',
            'imgpath' => 'laravelFre.jpg',


        ]);
    }
}
