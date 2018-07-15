<?php
/**
 * Footer HTML markup structure
 *
 * @package     serendipite
 * @since       1.0.0
 * @author      camille villard
 * @link        https://camillevillard.io
 * @license     protected by copyright / free for personal use only
 */
namespace serendipite\Structure;

/**
 * Unregister default navigation events.
 *
 * @since 1.3.0
 *
 * @return void
 */
function unregister_footer_events() {
	//remove_action( 'genesis_footer', 'genesis_do_footer' );
}

//* Change the footer text
add_filter('genesis_footer_creds_text', __NAMESPACE__ . '\footer_creds_filter');
function footer_creds_filter( $creds ) {
	$creds = '<div class="footer-title">[footer_copyright after=" serendipité - tous droits réservés "]</div><p class="love">logo et webdesign imaginés et fabriqués avec <span class="accent-love">beaucoup d&apos;amour</span> par <a href="http://www.camillevillard.com" target="_blank">camille villard</a></p>';
	return $creds;
}

// add the categories and random post links
// add_action( 'genesis_after_footer', __NAMESPACE__ . '\footer_nav' );
//  function footer_nav() {
// 	 echo '<li class="footer-templates">';
// 	 echo '<a class="btn-categories" href="#">parcourir les categories</a>';
// 	 echo '<a class="btn-au-hasard" href="https://serendipite.org/=?random">article au hasard</a>';
// 	 echo '</li>';
// }

add_action('genesis_after_footer', __NAMESPACE__ . '\footer_confidentialite');
function footer_confidentialite() {
	echo '<a class="mentions-footer" href="https://serendipite.org/=?random">politique de confidentialite</a>';
}
