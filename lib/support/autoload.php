<?php
/**
 * File autoloader
 *
 *
 * @package     serendipite
 * @since       1.0.0
 * @author      camille villard
 * @link        https://camillevillard.io
 * @license     protected by copyright / free for personal use only
 */
namespace serendipite\Support;




function init_files( $is_admin = false ) {
	$filenames = array(
		'setup.php',
		'components/customizer/css-handler.php',
		'components/customizer/helpers.php',
		'widgets/widget-areas.php',
		'support/formatting.php',
		'support/load-assets.php',
		'structure/archive.php',
		'structure/comments.php',
		'structure/footer.php',
		'structure/header.php',
		'structure/nav.php',
		'structure/post.php',
		'structure/sidebar.php',
		'structure/search.php',
		'components/customizer/customizer.php',
	);

	load_specified_files( $filenames );
}

/**
 * Load each of the specified files.
 *
 * @since 1.3.0
 *
 * @param array $filenames
 * @param string $folder_root
 *
 * @return void
 */
function load_specified_files( array $filenames, $folder_root = '' ) {
	$folder_root = $folder_root ?: CHILD_THEME_DIR . '/lib/';
	foreach ( $filenames as $filename ) {
		require_once $folder_root . $filename;
	}
}

/**
 * Autoload the files and dependencies.
 *
 * @since 2.0.0
 *
 * @return void
 */
function do_autoload() {
	$is_admin = is_admin();
	init_files( $is_admin );
}

/**
 * Get runtime configuration parameters.
 *
 * @since 1.3.0
 *
 * @param string $key Configuration parameter key
 * @param string $config_file (Optional) Configuration filename without the extension.
 *
 * @return array|null|mixed
 */
function get_configuration_parameters( $key = '', $config_file = 'theme-setup' ) {
	static $config = array();
	if ( ! $config_file ) {
		return;
	}
	if ( ! array_key_exists( $config_file, $config ) ) {
		$config[ $config_file ] = (array) include( CHILD_THEME_DIR . '/config/' . $config_file . '.php' );
	}
	if ( ! $key ) {
		return $config[ $config_file ];
	}
	if ( array_key_exists( $key, $config[ $config_file ] ) ) {
		return $config[ $config_file ][ $key ];
	}
}
do_autoload();
