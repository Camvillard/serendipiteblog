<?php
/**
 *
 * Template for single post
 *
 *
 * @package     serendipite
 * @since       1.0.0
 * @author      camille villard
 * @link        https://camillevillard.io
 * @license     protected by copyright / free for personal use only
 */

 namespace serendipite\single;

 // displays the post info before the entry title
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
add_action( 'genesis_entry_header', 'genesis_post_info', 6 );

 // change les metas
add_filter( 'genesis_post_info', __NAMESPACE__ . '\custom_post_infos');
 function custom_post_infos($infos_des_articles) {
    $infos_des_articles = '[post_date label="article publié le : "][post_categories before="" sep="&#160;/"]';
    return $infos_des_articles;
}

 // Add post navigation (requires HTML5 theme support)
 add_post_type_support( 'post', __NAMESPACE__ . '\prev_next_post_nav' );
 add_action( 'genesis_after_entry', __NAMESPACE__ . '\prev_next_post_nav', 8 );
   function prev_next_post_nav() {
    	genesis_markup( array(
    		'open'    => '<div %s>',
    		'context' => 'single-entry-pagination',
    	) );
    	echo '<div class="nav-articles">';
    	previous_post_link( '%link', 'article precedent' );
    	next_post_link( '%link', 'article suivant' );
    	echo '</div>';
    	genesis_markup( array(
    		'close'    => '</div>',
    		'context' => 'single-entry-pagination',
    	) );
  }

  // change les metas
add_filter( 'genesis_post_meta', __NAMESPACE__ . '\custom_post_metas');
  function custom_post_metas($metas_des_articles) {
 		$metas_des_articles = '[post_date label="article publié le : "][post_categories before="catégorie : " sep="&#160;/"][post_tags before="étiquette : " sep="&#160;/"][post_comments zero="Il n&apos;a pas encore de commentaire" one="il y a déjà un commentaire" more="Il y a déjà % commentaires"]';
 		return $metas_des_articles;
}


 // run the genesis loop
  genesis();
