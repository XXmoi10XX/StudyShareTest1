<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `is_deleted`, `name`) VALUES
(NULL, NOW(), NOW(), 0, 'DIY'),
(NULL, NOW(), NOW(), 0, 'Laravel'),
(NULL, NOW(), NOW(), 0, 'WEBサービス'),
(NULL, NOW(), NOW(), 0, 'カメラ'),
(NULL, NOW(), NOW(), 0, 'Javascript,jQuery');
    ];
});
