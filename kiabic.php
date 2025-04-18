<?php
/**
 * Kiabic
 * 
 * Bootstrap icosn for WordPress plugin developers.
 * 
 * @link https://github.com/Mansourkia/kiabic
 */
if (!class_exists('Kiabic')) {
	class Kiabic {
		private static $icons = array();
		private static function load_icons() {
			$file = fopen(__DIR__ . '/library.json', 'r');
			$fetch = '';
			while (!feof($file)) {
				$fetch .= fgets($file);
			}
			fclose($file);
			self::$icons = json_decode($fetch, 1);
		}
		public static function get_icon($slug) {
			$icon = false;
			if (empty(self::$icons)) {
				self::load_icons();
			}
			if (array_key_exists($slug, self::$icons)) {
				$icon = self::$icons[$slug];
			}

			return $icon;
		}
		public static function icon($slug) {
			echo self::get_icon($slug);
		}
	}
}
