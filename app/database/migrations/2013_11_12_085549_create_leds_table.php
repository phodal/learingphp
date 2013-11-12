<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLedsTable extends Migration {

	public function up()
	{
		Schema::create('leds', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('led1');
			$table->boolean('led2');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('leds');
	}

}