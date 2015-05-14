<?php
/**
 * Clean up header output
 * @package owayt
 */
function owayt_head_cleanup() 
{
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
}

add_action('init', 'owayt_head_cleanup');
