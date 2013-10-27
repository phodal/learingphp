<?php

/**
 * Box Office model config
 */

return array(

	'title' => '导航',

	'single' => '导航',

	'model' => 'Nav',
	
	/**
	 * The display columns
	 */
	'columns' => array(
		'nav_name' => array(
			'nav_name'=>'标题',
			'type'=>'text',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'nav_name' => array(
			'nav_name'=>'标题',
			'type'=>'text',		
		),

	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'nav_name' => array(
			'nav_name'=>'标题',
			'type'=>'text',		
		),

	),

);