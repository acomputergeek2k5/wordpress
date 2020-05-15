<?php
	
function academy_post_types() {
	
	//Events Post Type
	register_post_type( 'event', array(
		'rewrite' => array('slug' => 'events'),
		'has_archive' => true,
		'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
		'public' => true,
		'labels' => array(
			'name' => 'Events',
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event',
			'all_items' => 'All Events',
			'singular_name' => 'Event'	
		),
		'menu_icon' => 'dashicons-calendar'
	));
	
	//Programs Post Type
	register_post_type( 'program', array(
		'rewrite' => array('slug' => 'programs'),
		'has_archive' => true,
		'supports' => array('title', 'editor'),
		'public' => true,
		'labels' => array(
			'name' => 'Programs',
			'add_new_item' => 'Add New Program',
			'edit_item' => 'Edit Program',
			'all_items' => 'All Programs',
			'singular_name' => 'Program'	
		),
		'menu_icon' => 'dashicons-awards'
	));

}

add_action( 'init', 'academy_post_types');