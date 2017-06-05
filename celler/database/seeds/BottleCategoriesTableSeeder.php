<?php

use App\Base\BaseSeeder;
use App\Model\Bottles;
use App\Model\Categories;
use App\Model\BottleCategories;
use Carbon\Carbon;

class BottleCategoriesTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bottle_categories')->delete();

        for ($i = 0; $i < 30; $i++) {
            $bottle = Bottles::all('id')->random();
            $category = Categories::all('id')->random();
            BottleCategories::create([
                'created_at' => Carbon::today(),
                'updated_at' => Carbon::today(),
                'bottle_id' => $bottle->id,
                'category_id' => $category->id,
            ]);
        }
    }
}
