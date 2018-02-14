<?php

	if( !function_exists('onp_build') ) {
		function onp_build()
		{
			$builds = func_get_args();

			return in_array(BUILD_TYPE, $builds);
		}
	}

	if( !function_exists('onp_lang') ) {
		function onp_lang()
		{
			$langs = func_get_args();

			$current_lang = defined('LANG_TYPE')
				? LANG_TYPE
				: get_locale();

			return in_array($current_lang, $langs);
		}
	}

	if( !function_exists('onp_license') ) {
		function onp_license()
		{
			$licenses = func_get_args();

			return in_array(LICENSE_TYPE, $licenses);
		}
	}

	if( !function_exists('onp_compiler_000_admin_assets') ) {
		function onp_compiler_000_admin_assets($hook)
		{
			?>
			<script>
				function onp_func_get_args() {
					if( !arguments.callee.caller ) {
						try {
							throw new Error('Either you are using this in a browser which does not support the "caller" property or you are calling this from a global context');
						}
						catch( e ) {
							return false;
						}
					}

					return Array.prototype.slice.call(arguments.callee.caller.arguments);
				}

				function onp_in_array(needle, haystack, strict) {
					var found = false, key, strict = !!strict;

					for( key in haystack ) {
						if( (strict && haystack[key] === needle) || (!strict && haystack[key] == needle) ) {
							found = true;
							break;
						}
					}

					return found;
				}

				function onp_build() {
					var builds = onp_func_get_args();
					return onp_in_array('<?php echo BUILD_TYPE ?>', builds);
				}

				function onp_lang() {
					var langs = onp_func_get_args();
					return onp_in_array('<?php echo get_locale() ?>', langs);
				}
			</script>
		<?php
		}

		add_action('admin_enqueue_scripts', 'onp_compiler_000_admin_assets');
	}