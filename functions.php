<?php
	
	/*=================================================
			=  Settings and core functions  =
	=================================================*/

	require_once('settings.php');
	require_once('functions/starter-theme-tinymce.php');

	/*=================================================
	=            Enqueue Assets | CSS & JS            =
	=================================================*/

	function enqueue_assets ()
	{	
		wp_enqueue_style('master', get_template_directory_uri() . '/css/master.css');

		wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');

		wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

		wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css');

		wp_enqueue_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css');

		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-1.11.1.min.js', array(), '1.11.1', true);

		wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true);

		wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);

		wp_register_script('controller', get_template_directory_uri() . '/js/controller.min.js', array(), '1.0.0', true);

		wp_localize_script('controller', 'wp_config', array('site_url' => site_url()));
		wp_enqueue_script('controller');
	}

	add_action('wp_enqueue_scripts', 'enqueue_assets');


	 /* Adds Media Uploader Assets */
	function load_wp_media_files() 
	{
		wp_enqueue_media();
	}

	add_action('admin_enqueue_scripts', 'load_wp_media_files');


	 /*  Register thumbnails for posts  */
	if (function_exists('add_theme_support'))
	{
		add_theme_support('post-thumbnails') ;  
	}

	if(function_exists('add_theme_support')) {
		add_theme_support("title-tag");
	}

   /* Adds image sizes | add_image_size(slug, width, height, hardcrop) */ 
	
	// if (function_exists('add_image_size'))
	// { 
	// 	add_image_size('header-image', 1600, 460, true);
	// }
	

	 /* Registers The Primary Menu (Header) */
	 register_nav_menu('header-navigation', 'Primary Menu');


	/* Returns link add the end of excerpt */
	function new_excerpt_more ($more) 
	{
		return '... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('read more', 'starter-theme') . '</a>';
	} 

   add_filter( 'excerpt_more', 'new_excerpt_more' );

	/* Changes excerpts word length */
	function custom_excerpt_length ($length) 
	{
		return 40;
	}

	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	register_sidebar('page_sidebar');
	

add_action('admin_enqueue_scripts', 'chrome_fix');
function chrome_fix() {
	if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Chrome' ) !== false )
		wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
}



?>