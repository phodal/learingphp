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
		$this->call('PostsTableSeeder');
		$this->command->info('User table seeded!');

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
class PostsTableSeeder extends Seeder{
	public function run()
	{
		Posts::create(array(
				'author'=>'admin',
				'post_content'=>'Welcomt the PlanDCMS',
				'post_title'=>'This is the first page fo PlanDCMS'
			));
	}
}