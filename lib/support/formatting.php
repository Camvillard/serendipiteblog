<?php
/**
 * Description
 *
 * @package     serendipite
 * @since       1.0.0
 * @author      camille villard
 * @link        https://camillevillard.io
 * @license     protected by copyright / free for personal use only
 */
namespace serendipite;


add_filter( 'get_the_content_more_link', __NAMESPACE__ . '\modify_the_content_more_link', 10, 2 );
/**
 * Modify the content more_link.
 *
 * @since 1.0.0
 *
 * @param string $html
 * @param string $more_link_text
 *
 * @return string
 */
function modify_the_content_more_link( $html, $more_link_text ) {
	$html = str_replace( '&#x02026; ', '&lpar;&hellip;&rpar;<p>', $html );
	$html = str_replace( '</a>', '</a></p>', $html );
	$html = str_replace( $more_link_text, 'lire la suite', $html );

	return $html;
}
