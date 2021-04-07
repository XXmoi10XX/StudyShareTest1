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


        ]);

        DB::table('books')->insert([
            'title' => 'PHPフレームワーク Laravel実践開発',
            'auth' => '掌田 津耶乃',
            'body' => '「MVC以外」の使いこなしもできる!『PHPフレームワーク Laravel入門』を読み終わった方にお勧め!「もっと知りたかったこと」を本書で詳細に解説!Laravel5.8.9準拠。本書で取り上げる主なテーマ:コア機能(ルーティング~ファイルアクセス)の詳細から「サービス」、DBクラスとEloquent、ジョブ管理、フロントエンド(Vue.js、React、Angular)との連携、ユニットテスト、Artisanコマンドまで…。',
            'imgpath' => 'laravelFre2.jpg',

        ]);

        DB::table('books')->insert([
            'title' => 'PHPフレームワークLaravel Webアプリケーション開発',
            'auth' => '竹澤 有貴etc',
            'body' => '“実践パターン”と“ユースケース”で学ぶ、開発現場で使えるプロのテクニック。Laravelアプリケーションの構造・設計がすべて分かる。データベースとの連携、ユーザー認証、処理の分離、テスト駆動開発、運用etc',
            'imgpath' => 'laravelWeb.jpg',

        ]);

        DB::table('books')->insert([
            'title' => '改訂4版　基礎Ruby on Rails 基礎シリーズ',
            'auth' => '黒田努',
            'body' => '「Rails5.2対応版最新情報を追加し、実践的な使い方を大幅改訂!無理なく丁寧な解説で、Ruby言語の基本からスタート。手軽にできるRails開発! --このテキストは、tankobon_softcover版に関連付けられています。',
            'imgpath' => 'RubyOnRailsKuroda.jpg',

        ]);

        DB::table('books')->insert([
            'title' => 'Ruby on Rails 6 実践ガイド impress top',
            'auth' => '黒田努',
            'body' => '「仮想環境における開発環境の構築/Railsアプリケーションの基盤ユーザー認証とDB処理/堅牢なシステム設計/テストフレームワーク―業務システムの構築を通じて、Railsアプリケーション開発をマスター。',
            'imgpath' => 'RubyOnRailsKuroda2.jpg',

        ]);

        DB::table('books')->insert([
            'title' => 'Ruby on Rails 6 実践ガイド［機能拡張編］',
            'auth' => '黒田努',
            'body' => '業務システムの構築に必要な多様なテーマを網羅。プロフェッショナルなRailsアプリケーション開発。 --このテキストは、tankobon_softcover版に関連付けられています。',
            'imgpath' => 'RubyOnRailsKuroda3.jpg',
        ]);

        DB::table('books')->insert([
            'title' => 'パーフェクト Ruby on Rails 【増補改訂版】',
            'auth' => 'すぎわらまさのり',
            'body' => 'Railsプログラマ必読。Rails6.0対応!Railsのセオリーを徹底解説。Railsに関する基本情報からテスト、インフラ・運用、設計や拡張法まで完全網羅。MVC/Webpacker/minitest/モデル設計/Docker。',
            'imgpath' => 'PerfectRubyOnRails.jpg',
        ]);
    }
}
