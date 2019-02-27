<?php 
//FRONT PAGE EDITING
function front_page_editing(){
	register_post_type('front page', array(
		'supports' => array('title', 'editor', 'excerpt'),
		'rewrite' => array('slug' => 'front page'),
		'has archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Front Page Statement',
			'edit_item' => 'Edit Front Page',
			'singular' => 'Front Page Statement'
		),
		'menu_icon' => 'dashicons-admin-home'
	));
}

add_action('init', 'front_page_editing');

//EDITING THE FRONT PAGE SLIDER
function carousel_slider(){
	register_post_type('slider', array(
			'supports' => array('title', 'editor', 'excerpt'),
			'rewrite' => array('slug' => 'slider'),
			'has_archive' => true,
			'public' => true,
			'labels' => array(
				'name' => 'Slider',
				'add_new_item' => 'Add New Slider',
				'edit_item' => 'Edit Slider',
				'singular_name' => 'Slider'
			),
			'menu_icon' => 'dashicons-images-alt'));
}

add_action('init', 'carousel_slider');

//Same thing but in french
function fr_front_page_editing(){
	register_post_type('fr_front page', array(
		'supports' => array('title', 'editor', 'excerpt'),
		'rewrite' => array('slug' => 'fr_front page'),
		'has archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'FR_Front Page Statement',
			'edit_item' => 'FR_Edit Front Page',
			'singular' => 'FR_Front Page Statement'
		),
		'menu_icon' => 'dashicons-admin-home'
	));
}

add_action('init', 'fr_front_page_editing');

//same thing but in french
function fr_carousel_slider(){
	register_post_type('fr_slider', array(
			'supports' => array('title', 'editor', 'excerpt'),
			'rewrite' => array('slug' => 'fr_slider'),
			'has_archive' => true,
			'public' => true,
			'labels' => array(
				'name' => 'FR_Slider',
				'add_new_item' => 'FR Add New Slider',
				'edit_item' => 'FR Edit Slider',
				'singular_name' => 'FR Slider'
			),
			'menu_icon' => 'dashicons-images-alt'));
}

add_action('init', 'fr_carousel_slider');

//register the Publications post type
function publications(){
	register_post_type('publication', array(
	'supports' => array('title', 'editor', 'excerpt'),
	'rewrite' => array('slug' => 'publications'),
	'has_archive' => true,
	'public' => true,
	'labels' => array(
		'name'=> 'Publications',
		'add_new_item' => 'Add New Publication',
		'edit_item' => 'Edit Publication',
		'singular' => 'Publication'
	),
	'menu_icon' => 'dashicons-book-alt'));
}

add_action('init', 'publications');
 ?>
