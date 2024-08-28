<?php
function wpbase_styles_scripts() {

	// styles

	// Font Awesome
	wp_register_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' );
//	wp_register_style( 'swiper', get_template_directory_uri() . '/css/swiper.css' );

	wp_enqueue_style( 'styles', get_stylesheet_uri(), array( 'font-awesome' ), '' );

	//scripts

	// Fancybox
	wp_register_style( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css', array(), '' );
	wp_register_script( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array(), '', true );

	// Slick
	wp_register_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), '' );
	wp_register_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js', array( 'jquery' ), '', true );

  wp_register_script( 'fullpage', get_template_directory_uri() . '/js/includes/fullpage.min.js', '', true );
  wp_register_script( 'select2', get_template_directory_uri() . '/js/includes/select2.min.js', '', true );

	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'fullpage', 'select2' ), '', true );
}

add_action( 'wp_enqueue_scripts', 'wpbase_styles_scripts' );