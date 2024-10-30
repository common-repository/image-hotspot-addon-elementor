<?php
/**
 * @package BaweElementor
 */

namespace Bae\Base;

class Activate {
	public static function activate() {
		flush_rewrite_rules();
	}
}