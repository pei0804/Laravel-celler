<?php

use App\Base\BaseSeeder;
use App\Model\Categories;
use Carbon\Carbon;

class CategoriesTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        for ($i = 0; $i < 10; $i++) {
            Categories::create([
                'name' => $this->faker->word,
                'created_at' => Carbon::today(),
                'updated_at' => Carbon::today()
            ]);
        }
    }
}
