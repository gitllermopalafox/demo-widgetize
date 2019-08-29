<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NumbersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (range(1, 100) as $index) {

            DB::table('numbers')->insert([
                'number' => mt_rand(100, 999)
            ]);

        }

    }
}
