<?php
//imports the javascript and css files
function davit_files(){
	wp_register_script('jquery1', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
	wp_register_script('jquery2', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
	wp_register_script('bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
	wp_enqueue_script('jquery1');
	wp_enqueue_script('jquery2');
	wp_enqueue_script('bootstrapjs');
	wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('theme-css', get_template_directory_uri() . '/theme.css');
	wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'davit_files');

//Redirect subscriber accounts out of admin and onto homepage
add_action('admin_init', 'redirectSubsToFrontend');

function redirectSubsToFrontend(){
	$ourCurrentUser = wp_get_current_user();
	if(count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber'){
		wp_redirect(site_url('/'));
		exit;
	}
}

//hides admin bar from non-editorial/administrative roles
add_action('admin_init', 'noSubsAdminBar');

function noSubsAdminBar(){
	$ourCurrentUser = wp_get_current_user();
	if(count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber'){
		show_admin_bar(false);
	}
}	

function my_features(){
		register_nav_menu('headerMenuLocation', 'Header Menu Location');//args('name of the menu', 'the text that actually shows up in the menu') this allows you to make a menu in wp-admin.
		register_nav_menu('footerLocationOne', 'Footer Location One');
		register_nav_menu('footerLocationTwo', 'Footer Location Two');
		add_theme_support('title-tag');
	}
	add_action('after_setup_theme', 'my_features');//args: to have a unique title for every page: (wordpress function after_setup_theme, our function)
?>