<?php

use Illuminate\Database\Migrations\Migration;

class CreateNavs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(
			'navs',
			function($table){
				$table->increments('id');
				$table->string('nav_name');
				$table->string('nav_en');
				$table->timestamps();
			}
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('navs');
	}

}