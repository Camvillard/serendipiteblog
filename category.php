<?php
/**
 *
 * archives pour les categories
 *
 * @package     serendipite
 * @since       1.0.0
 * @author      camille villard
 * @link        https://camillevillard.io
 * @license     NonCommercial Creative Common Attribution.
 *
 */
namespace serendipite\category;

// change l'image à la une de place
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
add_action( 'genesis_entry_header', 'genesis_do_post_image', 8 );

add_action('genesis_archive_title_descriptions', __NAMESPACE__ . '\add_title_to_the_category_page',9);
  function add_title_to_the_category_page() {
    echo '<div class="archive-pre-title">catégorie / </div>';
  }

// enlàve les métas
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

// change les metas
add_filter( 'genesis_post_info', __NAMESPACE__ . '\custom_post_infos');
function custom_post_infos($infos_des_archives) {
   $infos_des_archives = '[post_date label="publié le "][post_tags before="" sep="&#160;/"]';
   return $infos_des_archives;
}

 // Run the Genesis loop.
 genesis();
