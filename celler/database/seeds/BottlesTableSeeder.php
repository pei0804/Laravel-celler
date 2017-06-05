<?php
use App\Base\BaseSeeder;
use App\Model\Accounts;
use App\Model\Bottles;
use Carbon\Carbon;

class BottlesTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bottles')->delete();

        for ($i = 0; $i < 30; $i++) {
            $account = Accounts::all('id')->random();
            Bottles::create([
                'name' => $this->faker->name,
                'quantity' => 1,
                'created_at' => Carbon::today(),
                'updated_at' => Carbon::today(),
                'account_id' => $account->id,
            ]);
        }
    }
}
