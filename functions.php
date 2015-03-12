<?php 

function teambuktoo_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'pretty-script', get_template_directory_uri() . '/js/jquery.js', array( 'jquery' ) );
	wp_register_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	wp_register_script( 'isotope-script', get_template_directory_uri() . '/js/jquery.isotope.min.js', array( 'jquery' ) );
	wp_register_script( 'photo-script', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array( 'jquery' ) );
	wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
	wp_register_script( 'contact-script', get_template_directory_uri() . '/js/contact_form.js', array( 'jquery' ) );
	wp_register_script( 'map-script', get_template_directory_uri() . '/js/jquery-1.10.2.min.map', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:

	wp_enqueue_script( 'pretty-script' );
	wp_enqueue_script( 'bootstrap-script' );
	wp_enqueue_script( 'isotope-script' );
	wp_enqueue_script( 'photo-script' );
	wp_enqueue_script( 'main-script' );
	wp_enqueue_script( 'contact-script' );
	wp_enqueue_script( 'map-script' );

}
add_action( 'wp_enqueue_scripts', 'teambuktoo_scripts_with_jquery' );

?>