<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('posts',function($table)
		{
			$table->increments('id');
			$table->string('author')->default('admin');
			$table->longtext('post_content');
			$table->text('post_title');
			$table->timestamps();	

		});
	}

	public function down()
	{
		Schema::drop('posts');
	}

}