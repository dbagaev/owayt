<?php

/**
 * Register widgetized areas and widgets
 *
 * @package owayt
 */

if ( ! function_exists( 'owayt_widgets_init' ) ) :

function owayt_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'owayt' ),
		'description'   => __( 'The main widget area displayed in the sidebar.', 'owayt' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Left Panel', 'owayt' ),
		'description'   => __( 'The left footer widget area, displayed below the Footer widget area.', 'alienship' ),
		'id'            => 'footer-left-bar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
			'name'          => __( 'Footer Central Panel', 'owayt' ),
			'description'   => __( 'The second footer widget area, displayed below the Footer widget area.', 'alienship' ),
			'id'            => 'footer-central-bar',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
		
	register_sidebar( array(
		'name'          => __( 'Footer Right Panel', 'owayt' ),
		'description'   => __( 'The third footer widget area, displayed below the Footer widget area.', 'alienship' ),
		'id'            => 'footer-right-bar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'owayt_widgets_init' );
endif;



/* Register Alien Ship widgets */
function owayt_register_widgets() {

	/* Load the stacked pills menu widget */
	locate_template( '/inc/widgets/widget-nav-stacked-pills-menu.php', true );

	/* Register the nav list menu widget */
	register_widget( 'Nav_Stacked_Pills_Menu_Widget' );

}
add_action( 'widgets_init', 'owayt_register_widgets' );
