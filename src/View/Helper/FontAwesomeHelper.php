<?php

namespace Commons\View\Helper;

use Cake\View\Helper;

class FontAwesomeHelper extends Helper {

	/**
	 * Create a simple icon.
	 *
	 * @param string|array $class
	 * @return string
	 */
	public function icon($class) {
		$class = 'fa-' . (is_array($class) ? implode(' fa-', $class) : $class);
		return sprintf('<i class="fa %s"></i>', $class);
	}
}
