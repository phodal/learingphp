<?php

class Posts extends Eloquent {
	public static $rules=array
	(
		'author'=>'required',
		'post_title'=>'required',
		'post_content'=>'required',
		'updated_at'=>'required',
	);
	public function posts()
	{

	}
}