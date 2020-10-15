<?php

function load_stylesheets()
{
	wp_register_style('font', get_template_directory_uri().'/fonts/beyond_the_mountains-webfont.css', array(), 1, 'all');
	wp_enqueue_style('font');


	wp_register_style('boottrap', get_template_directory_uri().'/plugin-frameworks/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style('boottrap');

	wp_register_style('swiper', get_template_directory_uri().'/plugin-frameworks/swiper.css', array(), 1, 'all');
	wp_enqueue_style('swiper');


	wp_register_style('ionicons', get_template_directory_uri().'/fonts/ionicons.css', array(), 1, 'all');
	wp_enqueue_style('ionicons');

	wp_register_style('cmcs', get_template_directory_uri().'/common/styles.css', array(), 1, 'all');
	wp_enqueue_style('cmcs');

	/* this for our custom css */
	
	/* wp_register_style('custom', get_template_directory_uri().'/custom.css', array(), 1, 'all');
	wp_enqueue_style('custom'); */
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


/* all scripts loaded */

function load_js()
{
	/* jquery is not working so we hve to register it on wordpress. on browser, inspect element-> console tab
		getting error  $ is not define */

	wp_deregister_script('jquery');

	wp_register_script('jquery', get_template_directory_uri().'/plugin-frameworks/jquery-3.2.1.min.js', '',1,1,1);
	wp_enqueue_script('jquery');

	wp_register_script('bootstrap', get_template_directory_uri().'/plugin-frameworks/bootstrap.min.js', '',1,1,1);
	wp_enqueue_script('bootstrap');

	wp_register_script('swiper', get_template_directory_uri().'/plugin-frameworks/swiper.js', '',1,1,1);
	wp_enqueue_script('swiper');

	wp_register_script('cmjs', get_template_directory_uri().'/common/scripts.js', '',1,1,1);
	wp_enqueue_script('cmjs');


	/* add custom javascript files */

	/* wp_register_script('customjs', get_template_directory_uri().'/custom.js', '',1,1,1);
	wp_enqueue_script('customjs');*/
}

add_action('wp_enqueue_scripts', 'load_js');

      

/* this code is for menu - menu support  */

add_theme_support('menus');


/* Register menus */
register_nav_menus(

	array(
			'top-menu' => __('Top Menu', 'theme'), /* its a double underscore*/
	)
);






// theme supprt : this option is for display featured image on page
add_theme_support('post-thumbnails');


