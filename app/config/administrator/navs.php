<?php

/**
 * Box Office model config
 */

return array(

	'title' => '导航',

	'single' => '导航',

	'model' => 'Navs',
	
	/**
	 * The display columns
	 */
	'columns' => array(
		'id' => array(
			'title'=>'id',
			'type'=>'text',
		),
		'nav_name' => array(
			'title'=>'栏目名称',
			'type'=>'text',
		),
		'nav_en' => array(
			'title'=>'导航地址',
			'type'=>'text',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'nav_name' => array(
			'title'=>'标题',
			'type'=>'text',		
		),
		'nav_en' => array(
			'title'=>'导航地址',
			'type'=>'text',		
		),
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(	
		'nav_name' => array(
			'title'=>'标题',
			'type'=>'text',		
		),
		'nav_en' => array(
			'title'=>'URL地址(英语，用于当网址)',
			'type'=>'text',		
		),
	),

);