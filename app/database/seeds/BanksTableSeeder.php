<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BanksTableSeeder extends Seeder {

	public function run()
	{
		Bank::create([
				'id'=>'1',
				'name_bank'=>'BBVA BANCOMER',
				'number_bank'=>'16'
				]);

		Bank::create([
				'id'=>'2',
				'name_bank'=>'BANAMEX',
				'number_bank'=>'2'
				]);
		
	}

}