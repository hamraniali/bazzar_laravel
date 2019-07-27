<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\App;
use Faker\Generator as Faker;

$factory->define(App::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'teamName' => $faker->name,
        'imageSrc' => $faker->imageUrl(100,100,'food'),
        'category_id' => 2,
        'type' => 'soft',
        'rate' => 4,
        'size' => '35154654',
        'downloadCount' => 50,
        'commentCount' => 10,
        'imagesSrc' => '987oiqwjdlwjdlwjqoi',
        'downloadLink' => 'kqshudkhaosdlkla',
        'version' => '2354' ,
        'news' => 'akjsdhasjdnlkdsjdlkas',
        'description' => 'wjdhiadhkajiksdghasd',
        'email' => 'ashdgakjsdbasdbjk' ,
        'mobile' => '5436546'
    ];
});
