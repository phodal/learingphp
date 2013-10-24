<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts',function($table)
		{
			$table->increments('id');
			$table->text('author');
			$table->longtext('post_content');
			$table->text('post_title');
			$table->timestamps();

		});
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Shcema::drop('posts');
	}

}