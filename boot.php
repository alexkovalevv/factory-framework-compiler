<?php

/**
 * OnePress Compiler
 *
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>
 * @since         1.0.0
 * @package       core
 * @copyright (c) 2018, Webcraftic Ltd
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Checks if the one is already loaded.
// We prevent to load the same version of the module twice.
if ( defined( 'ONEPRESS_COMPILER_000_LOADED' ) ) {
	return;
}

define( 'ONEPRESS_COMPILER_000_LOADED', true );

define( 'ONEPRESS_COMPILER_000_VERSION', '4.0.6' );

// Absolute path and URL to the files and resources of the module.
define( 'ONEPRESS_COMPILER_000_DIR', dirname( __FILE__ ) );

include( ONEPRESS_COMPILER_000_DIR . '/compiler-functions.php' );