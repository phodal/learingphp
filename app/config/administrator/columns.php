<?php


return array(
	'title' => '栏目',
	'single' => '栏目',
	'model' => 'Columns',
	
	'columns' => array(
		'id' => array(
			'title'=>'id',
			'type'=>'text',
		),
		'columns_name' => array(
			'title'=>'标题',
			'type'=>'text',		
		),
	),

	'filters' => array(
		'id' => array(
			'title'=>'id',
			'type'=>'text',
		),		
		'columns_name' => array(
			'title'=>'标题',
			'type'=>'text',		
		),
	),

	'edit_fields' => array(	
		'columns_name' => array(
			'title'=>'标题',
			'type'=>'text',		
		),
	),

);