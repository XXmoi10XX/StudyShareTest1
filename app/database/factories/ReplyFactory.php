<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reply;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'updated_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'body' => $faker->realText(100),
        'user_id' => $faker->numberBetween(1, 5),
        'article_id' => $faker->numberBetween(1, 25),

        // $table->bigIncrements('id');
        // $table->text('body');
        // $table->biginteger('article_id')->unsigned();
        // $table->foreign('article_id')->references('id')->on('articles');
        // $table->biginteger('user_id')->unsigned();
        // $table->foreign('user_id')->references('id')->on('users');
        // $table->timestamps();
    ];
});
