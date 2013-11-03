<?php

return array(

	'title' => '导航',

	'single' => '导航',

	'model' => 'Navs',
	
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