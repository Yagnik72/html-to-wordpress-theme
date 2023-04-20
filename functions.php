<?php
function hello(){
	echo "Hello";
}

function load_stylesheet(){
	wp_register_style('style',get_template_directory_uri().'/assets/css/main.css',array(),1,'all');
	wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts','load_stylesheet');

function load_js(){
	wp_register_script('jquery_min',get_template_directory_uri().'/assets/js/jquery.min.js',array(),1,1,1);
	wp_enqueue_script('jquery_min');
	
	wp_register_script('jquery_scrolly',get_template_directory_uri().'/assets/js/jquery.scrolly.min.js',array(),1,1,1);
	wp_enqueue_script('jquery_scrolly');
	
	wp_register_script('jquery_scrollex',get_template_directory_uri().'/assets/js/jquery.scrollex.min.js',array(),1,1,1);
	wp_enqueue_script('jquery_scrollex');
	
	wp_register_script('skel',get_template_directory_uri().'/assets/js/skel.min.js',array(),1,1,1);
	wp_enqueue_script('skel');
	
	wp_register_script('util',get_template_directory_uri().'/assets/js/util.js',array(),1,1,1);
	wp_enqueue_script('util');
	
	wp_register_script('main',get_template_directory_uri().'/assets/js/main.js',array(),1,1,1);
	wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts','load_js');

add_theme_support('menus');

register_nav_menus(
	array('top_menu'=>'Top Menu')
);

add_theme_support('post-thumbnails');
add_theme_support('dark-editor-style');



function get_widgets(){
	register_sidebar(array(
		"name"=>__('Footer Copywrite','vishal'),
		"id"=>'footer_copywrite',
		'before_widget'=>'<p>',
		'after_widget'=>'</p>',
		'before_title'=>'<h2>',
		'after_title'=>'</h2>',
	));
	
	register_sidebar(array(
		"name"=>__('Facebook Link','vishal'),
		"id"=>'facebook_link',
		'before_widget'=>'<li>',
		'after_widget'=>'</li>',
		'before_title'=>'',
		'after_title'=>'',
	));
}

add_action('widgets_init','get_widgets');
?>