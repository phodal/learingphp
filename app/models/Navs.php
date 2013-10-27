<?php

class Navs extends Eloquent {
	public static $rules=array
	(
		'nav_name'=>'required',
		'nav_en'=>'required',
	);

}