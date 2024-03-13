<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class BudgetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('budgets')->insert([
            'title' => 'タイトル',
            'amount' => 5000,
            'from_date' => '2024-03-01',
            'to_date' => '2024-03-05',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
