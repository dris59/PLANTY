<?php
/**
 * planty Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package planty
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_PLANTY_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'planty-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_PLANTY_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );



//Hook qui ajoute un bouton admin au menu quand on est connecté wordpress
add_filter( 'wp_nav_menu_items', 'ajout_menu', 10, 2 );
function ajout_menu( $items, $args ) {
	if (is_user_logged_in()) {
		$items .= '<li class="menu-item"><a class="menu-link" href="http://localhost/PLANTY/wp-admin/">Admin</a></li>';
	}
	return $items;


}

