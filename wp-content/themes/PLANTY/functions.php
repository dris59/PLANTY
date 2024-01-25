<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}



//Hook qui ajoute un bouton admin au menu quand on est connecté
add_filter( 'wp_nav_menu_items', 'ajout_menu', 10, 2 );
function ajout_menu( $items, $args ) {
	if (is_user_logged_in()) {
		$items .= '<li class="menu-item"><a class="menu-link" href="/wp-admin">Admin</a></li>';
	}
	return $items;
}