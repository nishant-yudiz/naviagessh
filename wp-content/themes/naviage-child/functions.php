<?php 

function child_assets(){
	wp_enqueue_style( "bootstrap" , get_stylesheet_directory_uri( ).'/assets/css/bootstrap.min.css' );
    wp_enqueue_style( "child-theme" , get_stylesheet_directory_uri( ).'/style.css' );
	wp_enqueue_style( "animate" , get_stylesheet_directory_uri( ).'/assets/css/animate.css' );
	wp_enqueue_style( "fancy-box" , get_stylesheet_directory_uri( ).'/assets/css/jquery.fancybox.min.css' );
	wp_enqueue_script("jquery");
	wp_enqueue_script( "custom" , get_stylesheet_directory_uri( ).'/assets/js/custom.js' , true);
	wp_enqueue_script( "fancy-boxjs" , get_stylesheet_directory_uri( ).'/assets/js/jquery.fancybox.min.js' , true);
	wp_enqueue_script( "wow" , get_stylesheet_directory_uri( ).'/assets/js/wow.min.js' , true);
}
add_action( "wp_enqueue_scripts", "child_assets",11 );

// svg allowed
function svg_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'svg_mime_types');

register_sidebar(
	array(
		'name'          => __( 'footer-left', 'twentytwentyone' ),
		'id'            => 'footer-left',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	)
);

register_sidebar(
	array(
		'name'          => __( 'footer-right', 'twentytwentyone' ),
		'id'            => 'footer-right',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	)
);