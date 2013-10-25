<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function( $table)
	    {
	        $table->increments('id');
	        $table->string('email',50);
	        $table->string('name',100);
	        $table->string('password',60);
	        $table->boolean('led1',true);
	        $table->timestamps();
	    });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}