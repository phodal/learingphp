<?php

/**
 * Box Office model config
 */

return array(

	'title' => '文章',
	'single' => '内容',
	'model' => 'Posts',
	'form_width' => 960,

	'columns' => array(
		'author' => array(
			'title' => '作者',
			'select' => "author",
		),
		'post_title'=>array(
			'title'=>'标题',
			'select'=>'post_title',
		),
		'post_content'=>array(
			'title'=>'内容',
			'select'=>'post_content',
		),
		'updated_at'=>array(
			'title'=>'发布日期',
			'select'=>'updated_at',
			'sort_field'=>'updated_at',
		),
	),


	'filters' => array(
		'author' => array(
			'title'=>'作者',
		),
		'post_title'=>array(
			'title'=>'标题',
			'type'=>'text',
		),
		'post_content'=>array(
			'title'=>'内容',
			'type'=>'text',
		),
		'updated_at'=>array(
			'title'=>'时间',
			'type'=>'date',
		),

	),

	'edit_fields' => array(
		'post_title'=> array(
			'title'=>'标题',
			'type'=>'text',
		),
		'post_content'=>array(
			'title'=>'内容',
			'type'=>'wysiwyg',
			'name_field' => 'name',
		),
	),

);