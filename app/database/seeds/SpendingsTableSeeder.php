<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class SpendingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spendings')->insert([
            'title' => 'タイトル',
            'date' => '2024-03-13',
            'amount' => 500,
            'budget_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
