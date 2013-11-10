<?php

class Columns extends Eloquent {
	protected $table = 'columns';

	public static $rules=array(
		'columns_name'=>'required',
	);

	
}