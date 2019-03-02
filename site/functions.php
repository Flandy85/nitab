<?php
function replace_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, '1.11.3');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'replace_jquery');

function nitab_scripts_enqueue() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', null, '1.0', 'all' );
	wp_enqueue_style('googlefonts', '//fonts.googleapis.com/css?family=Poppins:300,400,700');

	// Load Javascript
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/app.js', null, '1.0', true);
}
/*Add the hooks, function kreditz_script_enqueue*/
add_action( 'wp_enqueue_scripts', 'nitab_scripts_enqueue' );

function nitab_theme_setup() {
// Enables use of navigation menu.
	register_nav_menu( 'primary', 'Website main navigation' );
}
add_action('init', 'nitab_theme_setup');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
?>