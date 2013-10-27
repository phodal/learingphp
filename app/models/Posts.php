<?php

class Posts extends Eloquent {
	public static $rules=array
	(
		'post_title'=>'required',
		'post_content'=>'required',
	);
	public function posts()
	{
        return $this->belongsTo('User');
	}
}