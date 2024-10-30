<?php

/**
 * @package  BaweElementor
 */

namespace Bae\Base;

class WidgetsRegister extends BaseController {
	public function register() {
		require_once $this->plugin_path . "inc/widgets-register.php";
	}
}