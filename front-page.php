<?php
/**
 *
 * Template Name: Front page
 *
 *
 * @package     serendipite
 * @since       1.0.0
 * @author      camille villard
 * @link        https://camillevillard.io
 * @license     protected by copyright / free for personal use only
 */

 namespace serendipite;


 add_filter( 'body_class', __NAMESPACE__ . '\add_custom_body_class', 1 );
 /**
  * Description.
  *
  * @since 1.0.0
  *
  * @param array $body_classes Array of body classes
  *
  * @return array
  */
 function add_custom_body_class( array $body_classes ) {
 	$body_classes[] = 'custom-front-page';

 	return $body_classes;
 }

 add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );


 add_action( 'genesis_entry_content', __NAMESPACE__ . '\render_front_page_widgets' );
 /**
  * Renders out the pre-footer.
  *
  * @since 1.0.0
  *
  * @return void
  */
 function render_front_page_widgets() {
 	genesis_widget_area( 'front-page-primary', array(
 		'before' => '<div class="front-page-primary"><div class="wrap">',
 		'after'  => '</div></div>',
 	) );

  genesis_widget_area( 'front-page-secondary', array(
    'before' => '<div class="front-page-secondary"><div class="wrap">',
    'after'  => '</div></div>',
  ) );
 }


genesis();
