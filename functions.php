function nitab_script_enqueue() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', null, '1.0', 'all' );
	wp_enqueue_style('googlefonts', '//fonts.googleapis.com/css?family=Roboto:400,500,700');
}