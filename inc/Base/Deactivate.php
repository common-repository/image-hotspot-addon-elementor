<?php
/**
 * @package BaweElementor
 */
namespace Bae\Base;

class Deactivate {
	public static function deactivate() {
		flush_rewrite_rules();
	}
}