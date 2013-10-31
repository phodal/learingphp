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
		$this->call('AthomesTableSeeder');
		$this->call('NavsTableSeeder');

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
class NavsTableSeeder extends Seeder{
	public function run()
	{
		Navs::create(array(
			'nav_name'=>'首页',
			'nav_en'=>'Home'
		));
		Navs::create(array(
			'nav_name'=>'关于我们',
			'nav_en'=>'About'
		));
	}
}
class AthomesTableSeeder extends Seeder
{
	public function run()
	{
		Athomes::create(array(
			'temperature'=>'19.8',
			'sensors1'=>'22.2',
			'sensors2'=>'7.5',
			'led1'=>False
		));
		Athomes::create(array(
			'temperature'=>'18.8',
			'sensors1'=>'22.0',
			'sensors2'=>'7.6',
			'led1'=>False
		));
	}
}