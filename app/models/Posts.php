<?php

class Posts extends Eloquent {
	public static $rules=array
	(
		'post_title'=>'required',
		'post_content'=>'required',
	);

	public function zcolumns()
	{
        return $this->belongsTo('Columns');
	}
}