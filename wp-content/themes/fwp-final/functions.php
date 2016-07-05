<?php
  /**
 * Activate Menu Areas
 * @since 0.1
 */
 function strategic_menu_areas(){
 	register_nav_menus(array(
 		'main_menu' => 'Main Menu at the top of every page',
 	
 		) );
 }
add_action('init', 'strategic_menu_areas' );


/**
 * Add widget areas (dynamic sidebars)
 *@since 0.1
 */
function awsome_widget_areas(){
	register_sidebar(array(
		'name' => 'Primary Sidebar',
		'id'   => 'primary-sidebar',
		'description'   => 'These widgets will appear next to the blog and archive views',
		'before_widget'   => '<section id="%1$s" class="widget %2$s">',
		'after_widget'   => '</section>',
		'before_title'   =>'<h3 class="widget-title">',
		'after_title'    => '</h3>,'
		));
	register_sidebar(array(
		'name' => 'Secondary Sidebar',
		'id'   => 'secondary-sidebar',
		'description'   => 'These widgets will appear on the front page',
		'before_widget'   => '<section id="%1$s" class="widget %2$s">',
		'after_widget'   => '</section>',
		'before_title'   =>'<h3 class="widget-title">',
		'after_title'    => '</h3>,'
		));

	register_sidebar(array(
		'name' => 'Footer Widgets',
		'id'   => 'footer-widgets',
		'description'   => 'These widgets will appear on the bottom of everything',
		'before_widget'   => '<section id="%1$s" class="widget %2$s">',
		'after_widget'   => '</section>',
		'before_title'   =>'<h3 class="widget-title">',
		'after_title'    => '</h3>',
		));
}
add_action('widgets_init', 'awsome_widget_areas' );
add_theme_support('post-thumbnails');

add_filter( 'widget_text', array( $wp_embed, 'run_shortcode' ), 8 );
add_filter( 'widget_text', array( $wp_embed, 'autoembed'), 8 );