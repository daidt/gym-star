<?php

use Illuminate\Database\Seeder;

class TrainingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i = 1; $i <= 200; $i++) {
    		DB::table('training')->insert([
    			'id_user'   => rand(10,30) ,
    			'id_program'   => rand(1,20),
    		]);
    	}
    }
}
