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
        DB::table('books')->insert([
            'title' => 'PHPフレームワークLaravel入門 第2版',
            'auth' => '掌田 津耶乃',
            'body' => '人気No.1フレームワークのロングセラー定番解説書が、新バージョン対応で改訂!Laravel6、PHP7.2対応。',
            'imgpath' => 'laravelFre.jpg',
            'ch1' => '1',
            'ch2' => '2',
            'ch3' => '3',
            'ch4' => '4',
            'ch5' => '5',
            'ch6' => '6',
            'ch7' => '7',
            'ch8' => '8'



        ]);

        DB::table('books')->insert([
            'title' => 'PHPフレームワーク Laravel実践開発',
            'auth' => '掌田 津耶乃',
            'body' => '「MVC以外」の使いこなしもできる!『PHPフレームワーク Laravel入門』を読み終わった方にお勧め!「もっと知りたかったこと」を本書で詳細に解説!Laravel5.8.9準拠。本書で取り上げる主なテーマ:コア機能(ルーティング~ファイルアクセス)の詳細から「サービス」、DBクラスとEloquent、ジョブ管理、フロントエンド(Vue.js、React、Angular)との連携、ユニットテスト、Artisanコマンドまで…。',
            'imgpath' => 'laravelFre2.jpg'
        ]);

        DB::table('books')->insert([
            'title' => 'PHPフレームワークLaravel Webアプリケーション開発',
            'auth' => '竹澤 有貴etc',
            'body' => '“実践パターン”と“ユースケース”で学ぶ、開発現場で使えるプロのテクニック。Laravelアプリケーションの構造・設計がすべて分かる。データベースとの連携、ユーザー認証、処理の分離、テスト駆動開発、運用etc',
            'imgpath' => 'laravelWeb.jpg'
        ]);

        DB::table('books')->insert([
            'title' => 'PHPフレームワーク Laravel実践開発',
            'auth' => '掌田 津耶乃',
            'body' => '「MVC以外」の使いこなしもできる!『PHPフレームワーク Laravel入門』を読み終わった方にお勧め!「もっと知りたかったこと」を本書で詳細に解説!Laravel5.8.9準拠。本書で取り上げる主なテーマ:コア機能(ルーティング~ファイルアクセス)の詳細から「サービス」、DBクラスとEloquent、ジョブ管理、フロントエンド(Vue.js、React、Angular)との連携、ユニットテスト、Artisanコマンドまで…。',
            'imgpath' => 'laravelFre2.jpg'
        ]);
    }
}
