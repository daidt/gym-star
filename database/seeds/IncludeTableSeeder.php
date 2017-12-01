<?php

use Illuminate\Database\Seeder;

class IncludeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	for($i = 1; $i <= 20;  $i++) {
    		$faker = Faker\Factory::create();
    		for ($j = 1; $j <= rand(5,10); $j++) {
    			DB::table('include')->insert([
    				'id_program' => $i ,
    				'id_action'   => $faker->unique()->numberBetween(1,100),
    			]);
    		}
    		unset($faker);
    	}

    }
}
