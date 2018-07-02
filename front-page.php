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

remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
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
 	genesis_widget_area( 'front-page-une', array(
 		'before' => '<div class="front-page-une"><div class="wrap">',
 		'after'  => '</div></div>',
 	) );

  genesis_widget_area( 'front-page-quotidien', array(
    'before' => '<div class="front-page-quotidien"><div class="wrap">',
    'after'  => '</div></div>',
  ) );

  genesis_widget_area( 'front-page-developpement', array(
    'before' => '<div class="front-page-secondaire"><div class="wrap">',
    'after'  => '</div></div>',
  ) );

  genesis_widget_area( 'front-page-about', array(
    'before' => '<div class="front-page-about"><div class="wrap">',
    'after'  => '</div></div>',
  ) );

  genesis_widget_area( 'front-page-education', array(
    'before' => '<div class="front-page-secondaire"><div class="wrap">',
    'after'  => '</div></div>',
  ) );

  genesis_widget_area( 'front-page-lecture', array(
    'before' => '<div class="front-page-lecture"><div class="wrap">',
    'after'  => '</div></div>',
  ) );

  genesis_widget_area( 'front-page-divers', array(
    'before' => '<div class="front-page-secondaire"><div class="wrap">',
    'after'  => '</div></div>',
  ) );

 }


genesis();
