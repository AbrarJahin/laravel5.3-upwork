<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x < 10; $x++)
		{
			DB::table('cities')->insert([
			            'name' => str_random(10)
			        ]);
		}
    }
}
