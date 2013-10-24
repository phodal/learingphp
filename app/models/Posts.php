<?php

class Posts extends Eloquent {
	public static $rules=array
	(
		'post_title'=>'required',
		'post_content'=>'required',
		'updated_at'=>'required',
	);
	public function posts()
	{

	}
}