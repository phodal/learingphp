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
		$this->call('RolesTableSeeder');
		$this->call('UsersRolesTableSeeder');

	}
}

class UserTableSeeder extends Seeder{
	public function run()
	{
		User::create(array(
			'name'=>'admin',
			'password'=>Hash::make('admin'),
			'email'=>'gmszone@phodal.com',
			'led1'=>'true'
		));
	}
}
class RolesTableSeeder extends Seeder{
	public function run()
	{
		Role::create(array(
			'name'=>'admin'
		));
	}
}
class UsersRolesTableSeeder extends Seeder{
	public function run()
	{
		UsersRoles::create(array(
			'user_id'=>'1',
			'role_id'=>'1'
		));
	}
}