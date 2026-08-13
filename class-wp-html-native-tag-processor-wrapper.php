<?php
// phpcs:disable Generic.Classes.DuplicateClassName.Found,Generic.Files.OneObjectStructurePerFile.MultipleFound
/**
 * Public HTML Tag Processor native adapter.
 *
 * @package WordPress
 * @subpackage HTML-API
 */

if ( class_exists( 'WP_HTML_Native_Tag_Processor', false ) ) {
	class WP_HTML_Native_Tag_Processor_Wrapper extends WP_HTML_Native_Tag_Processor {
		/**
		 * Indicates that source-range attribute updates are unavailable.
		 *
		 * @param string $name         Attribute name.
		 * @param array  $replacements {
		 *     Decoded attribute-value ranges which cannot be applied by this adapter.
		 *
		 *     @type array ...$0 {
		 *         One replacement.
		 *
		 *         @type int    $start       Decoded byte offset.
		 *         @type int    $length      Decoded byte length.
		 *         @type string $replacement Decoded replacement text.
		 *     }
		 * }
		 * @return bool False because the native adapter does not expose raw spans.
		 */
		protected function replace_attribute_value_ranges( $name, $replacements ) {
			return false;
		}
	}
} else {
	require_once __DIR__ . '/PHP/class-wp-html-php-tag-processor.php';

	class WP_HTML_Native_Tag_Processor_Wrapper extends WP_HTML_PHP_Tag_Processor {}
}
