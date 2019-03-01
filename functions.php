<?php
function nitab_script_enqueue() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', null, '1.0', 'all' );
	wp_enqueue_style('googlefonts', '//fonts.googleapis.com/css?family=Roboto:400,500,700');

	// Load Javascript
	wp_enqueue_script('main', get_template_directory_uri() . '/js/bundle.js', array('jquery'), '1.0.0', true);

	
}
/*Add the hooks, function kreditz_script_enqueue*/
add_action( 'wp_enqueue_scripts', 'nitab_script_enqueue' );
function nitab_theme_setup() {
// Enables use of navigation menu.
	register_nav_menu( 'Navigation menu', 'Website main navigation' );
}
add_action('init', 'nitab_theme_setup');
?>