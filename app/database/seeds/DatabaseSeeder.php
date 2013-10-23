<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('UserTableSeeder');
	}
}

class UserTableSeeder extends Seeder{
	public function run()
	{
		User::create(array(
			'name'=>'admin',
			'password'=>Hash::make('admin'),
			'email'=>'gmszone@phodal.com',
			'led1'=>'1'
		));
	}
}