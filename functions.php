<?php 
	 add_action( 'wp_enqueue_scripts', 'tectic_enqueue_styles' );
	 function tectic_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 



// tectic footer widgets register


add_action( 'widgets_init', 'tectic_widgets_init' );

if ( ! function_exists( 'tectic_widgets_init' ) ) {
	/**
	 * Initializes themes widgets.
	 */
	function tectic_widgets_init() {
		register_sidebar(
			array(
				'name'          => __( 'Footer Widget One', 'understrap' ),
				'id'            => 'footer-one',
				'description'   => __( 'Footer Widget One', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer Widget Two', 'understrap' ),
				'id'            => 'footer-two',
				'description'   => __( 'Footer Widget Two', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer Widget Three', 'understrap' ),
				'id'            => 'footer-three',
				'description'   => __( 'Footer Widget Three', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer Widget Four', 'understrap' ),
				'id'            => 'footer-four',
				'description'   => __( 'Footer Widget Four', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		
	}
} // endif function_exists( 'understrap_widgets_init' ).

