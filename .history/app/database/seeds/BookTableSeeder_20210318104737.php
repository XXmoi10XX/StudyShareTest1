<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->truncate();
        DB::table('stocks')->insert([
            'title' => 'PHPフレームワークLaravel入門 第2版',
            'auth' => '掌田 津耶乃',
            'body' => '人気No.1フレームワークのロングセラー定番解説書が、新バージョン対応で改訂!Laravel6、PHP7.2対応。',
            'imgpath' => 'laravelFre.'
        ]);

        DB::table('stocks')->insert([
            'title' => 'PHPフレームワーク Laravel実践開発',
            'auth' => '掌田 津耶乃',
            'body' => '「MVC以外」の使いこなしもできる!『PHPフレームワーク Laravel入門』を読み終わった方にお勧め!「もっと知りたかったこと」を本書で詳細に解説!Laravel5.8.9準拠。本書で取り上げる主なテーマ:コア機能(ルーティング~ファイルアクセス)の詳細から「サービス」、DBクラスとEloquent、ジョブ管理、フロントエンド(Vue.js、React、Angular)との連携、ユニットテスト、Artisanコマンドまで…。',
            'imgpath' => 'laravelFre.'
        ]);
    }
}
