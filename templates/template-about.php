<?php
/**
 *
 * Template Name: about page
 *
 *
 * @package     serendipite
 * @since       1.0.0
 * @author      camille villard
 * @link        https://camillevillard.io
 * @license     protected by copyright / free for personal use only
 */

 namespace serendipite\about;

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

add_filter( 'body_class', __NAMESPACE__ . '\add_custom_body_class', 1 );
/**
 * add a custom body classe to the page
 * @since 1.0.0
 * @param array $body_classes Array of body classes
 * @return array
 */
 function add_custom_body_class( array $body_classes ) {
 $body_classes[] = 'page-about';
 return $body_classes;
 }

 // add the contact and back to blog page buttons
 add_action( 'genesis_before_header', __NAMESPACE__ . '\backtoblog' );
  function backtoblog() {
    echo '<li class="nav-templates">';
    echo '<a class="btn-retour-au-blog" href="' . get_home_url() . '">retour au blog</a>';
    echo '<a class="btn-contact" href="#">contact</a>';
    echo '</li>';
 }


// add the categories and random post links
add_action( 'genesis_before_footer', __NAMESPACE__ . '\footer_nav' );
 function footer_nav() {
   echo '<li class="footer-templates">';
   echo '<div class="btn-categories">parcourir les catégories :</br><a class="cat-about" href="https://serendipite.org/category/quotidien/">quotidien</a><a class="cat-about" href="https://serendipite.org/category/arts-lectures/">arts &amp; lectures</a><a class="cat-about" href="https://serendipite.org/category/education-enseignement/">éducation &amp; enseignement</a><a class="cat-about" href="https://serendipite.org/category/developpement-personnel/">développement personnel</a><a class="cat-about" href="https://serendipite.org/category/divers/">n&apos;importe quoi</a></div>';
   echo '<div class="btn-au-hasard"><a href="https://serendipite.org/=?random">article au hasard</a></div>';
   echo '</li>';
}



// run the genesis loop
 genesis();
