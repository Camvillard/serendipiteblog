<?php
/**
 *
 * Template Name: contact page
 *
 *
 * @package     serendipite
 * @since       1.0.0
 * @author      camille villard
 * @link        https://camillevillard.io
 * @license     protected by copyright / free for personal use only
 */

 namespace serendipite;

 //remove all actions for a blank canvas
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
remove_action('genesis_entry_header', 'genesis_do_post_title');
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
remove_action('genesis_after_footer', 'serendipite\Structure\footer_confidentialite');


add_filter('genesis_noposts_text', __NAMESPACE__ . '\custom_404');
function custom_404($custom_404_text){
  $custom_404_text = 'la page que vous avez demandée n&apos;existe pas... </br>pas de panique, il y a des solutions !';
  return $custom_404_text;
}

 add_action( 'genesis_loop_else', __NAMESPACE__ . '\render_special_templates_widgets' );
 /**
  *
  * @since 1.0.0
  *
  * @return void
  */
 function render_special_templates_widgets() {
  genesis_widget_area( '404-page', array(
    'before' => '<div class="error-page-widgets"><div class="wrap">',
    'after'  => '</div></div>',
  ) );
}

// run the genesis loop
 genesis();
