<?php

namespace App\Base;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BaseSeeder extends Seeder
{
    protected $faker;
    function __construct() {
        $this->faker = Faker::create('ja_JP');
    }
}
