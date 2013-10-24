<?php

/**
 * Box Office model config
 */

return array(

	'title' => '文章',

	'single' => 'posts',

	'model' => 'Posts',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'name' => array(
			'title' => 'author',
			'select' => "author",
		),
		'post_title'=>array(
			'title'=>'post_title',
			'select'=>'post_title',
		),
		'post_content'=>array(
			'title'=>'post_content',
			'select'=>'post_content',
		),
		'updated_at'=>array(
			'title'=>'发布日期',
			'select'=>'updated_at',
			'sort_field'=>'updated_at',
		),

	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'id',
		'name' => array(
			'title'=>'author',
			'type'=>'text',
		),
		'post_title'=>array(
			'title'=>'post_title',
			'type'=>'text',
		),
		'post_content'=>array(
			'title'=>'post_content',
			'type'=>'text',
		),
		'updated_at'=>array(
			'title'=>'date',
			'type'=>'date',
		),

	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'name' => array(
			'title'=>'author',
			'type'=>'text',
			'name_field' => 'name',

		),
		'post_title'=> array(
			'title'=>'post_title',
			'type'=>'text',
			'name_field' => 'name',
		),
		'post_content'=>array(
			'title'=>'post_content',
			'type'=>'text',
			'name_field' => 'name',

		),
		'updated_at'=>array(
			'title'=>'DATE',
			'type'=>'date',
		),
	),

);