# StudyShareTest1

##  ShareStudy - 概要 -


<img width="700" height="1000" src="https://user-images.githubusercontent.com/40953175/114412255-e3691f00-9be7-11eb-88dd-f4a9e332d516.png">



参考書の分からない点を共有し,解決点をまとめるアプリです。



- 効率よく学習するためのサポート
- 分からないことで学習を辞めてしまうことを防ぐ

ことをコンセプトに「ShareStudy」というサービスを作りました。

<!-- アプリのURL: http://ec2-52-198-0-151.ap-northeast-1.compute.amazonaws.com/ -->

## 使い方


ログインすると質問回答出来ます。
1. アカウント登録 もしくはゲストログイン
2. ログイン、もしくはゲストログイン
3. 書籍のchapterを選択し、質問投稿
4. 質問に対して返信

主な使い方は以上です

## 目的


分らないことを質問することで抱えている問題を解決します。

 - 参考書の目次毎に及びsection事に分けてあります。
 - 返信機能あります


効率よく学習するためのサポートをします。


プログラミングの学習の際に色んなサイトから情報取集することに苦労しました。
動画やプログラミング専用学習サイトで学習していた際にコメント欄でエラーの出た箇所をコメントしている
人がいることで、自分も同じエラーをしていたのでエラーをすぐに解決することが出来ました。
この経験から参考書でもエラーを共有出来るサイトを作れば挫折することや、非効率な学習を避けスムーズに学習を出来ると思い作成しました。



## テーブル設計

 <img width="929" alt="スクリーンショット 2021-04-14 18 56 46" src="https://user-images.githubusercontent.com/40953175/114692522-a883fa00-9d53-11eb-8a6d-258cc240294e.png">
 
 ## AWS構成図
 
 <img width="662" alt="スクリーンショット 2021-04-14 21 13 51" src="https://user-images.githubusercontent.com/40953175/114708492-5ef0da80-9d66-11eb-95c9-347aacb81877.png">


## 使用技術

- PHP 7.3.11 
- Laravel 6.20.19
- Mysql 8.0.22
- laradock
- AWS
  - VPC
  - EC2

## 機能一覧
- リスト1
    - リスト1_1
- 投稿機能
  - 質問投稿
  - 質問返信
  - 削除
  - 編集
- ログイン機能
- ログアウト機能
- アカウント登録機能
- 書籍検索機能
- Fakerによるランダム文章(返信)



## ログイン、ログアウト、アカウント登録機能
![ログイン等](https://user-images.githubusercontent.com/40953175/114813309-d2d5c600-9dec-11eb-9176-3ee90dc96729.gif)


## 投稿機能
![投稿](https://user-images.githubusercontent.com/40953175/114813145-6ce93e80-9dec-11eb-9ef5-c6639c752c5f.gif)

## 返信機能
![コメント](https://user-images.githubusercontent.com/40953175/114823830-00c40600-9dff-11eb-9e0d-644a4e652d51.gif)

## 返信機能削除
![返信削除](https://user-images.githubusercontent.com/40953175/114966652-00367880-9eae-11eb-997d-252673402378.gif)



## 検索機能　
![検索](https://user-images.githubusercontent.com/40953175/114813794-cbfb8300-9ded-11eb-8b5d-220ada471eec.gif)
