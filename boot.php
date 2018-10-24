<?php

	/**
	 * OnePress Compiler
	 *
	 * @author Alex Kovalev <alex.kovalevv@gmail.com>
	 * @copyright (c) 2018, Webcraftic Ltd
	 *
	 * @package core
	 * @since 1.0.0
	 */

	// Exit if accessed directly
	if( !defined('ABSPATH') ) {
		exit;
	}

	// Checks if the one is already loaded.
	// We prevent to load the same version of the module twice.
	if( defined('ONEPRESS_COMPILER_000_LOADED') ) {
		return;
	}

	define('ONEPRESS_COMPILER_000_LOADED', true);

	define('ONEPRESS_COMPILER_000_VERSION', '4.0.4');

	// Absolute path and URL to the files and resources of the module.
	define('ONEPRESS_COMPILER_000_DIR', dirname(__FILE__));

	include(ONEPRESS_COMPILER_000_DIR . '/compiler-functions.php');