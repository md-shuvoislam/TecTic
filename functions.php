<?php 
	 add_action( 'wp_enqueue_scripts', 'tectic_enqueue_styles' );
	 function tectic_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 ?>