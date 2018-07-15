<?php
/**
 * Sidebars and widget area runtime configuration
 *
 * @package     serendipite
 * @since       1.0.0
 * @author      camille villard
 * @link        https://camillevillard.io
 * @license     protected by copyright / free for personal use only
 */
namespace serendipite\widgets;

return array(
	'unregister_widget_areas' => array(
		'sidebar',
		'sidebar-alt',
		// 'header-right',
	),

	'register_widget_areas' => array(
		array(
			'id'          => 'front-page-une',
			'name'        => __( 'billet à la une', 'serendipite' ),
			'description' => __( 'first widget area', 'serendipite' ),
		),

		array(
			'id'          => 'front-page-quotidien',
			'name'        => __( 'articles quotidien', 'serendipite' ),
			'description' => __( 'full width second widget area', 'serendipite' ),
		),

		array(
			'id'          => 'front-page-developpement',
			'name'        => __( 'articles developpement personnel', 'serendipite' ),
			'description' => __( 'third widget area', 'serendipite' ),
		),

		array(
			'id'          => 'front-page-about',
			'name'        => __( 'zone pour un a propos', 'serendipite' ),
			'description' => __( 'fourth widget area', 'serendipite' ),
		),

		array(
			'id'          => 'front-page-education',
			'name'        => __( 'articles education', 'serendipite' ),
			'description' => __( 'fifth widget area', 'serendipite' ),
		),

		array(
			'id'          => 'front-page-lecture',
			'name'        => __( 'articles lecture', 'serendipite' ),
			'description' => __( 'sixth widget area', 'serendipite' ),
		),

		array(
			'id'          => 'front-page-divers',
			'name'        => __( 'articles divers', 'serendipite' ),
			'description' => __( 'seventh widget area', 'serendipite' ),
		),

		array(
			'id'          => '404-page',
			'name'        => __( 'special widget area', 'serendipite' ),
			'description' => __( 'special widget area', 'serendipite' ),
		),

	),
);
