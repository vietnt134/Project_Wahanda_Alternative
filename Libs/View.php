<?php
/**
 *
 */
class View {

	function __construct() {

	}

	public function render($name, $noInclude = false) {
		if ($noInclude == TRUE) {
			require 'Views/' . $name . '.php';
		} else {
			require 'Views/header.php';
			require 'Views/' . $name . '.php';
			require 'Views/footer.php';
		}

	}

	public function render_admin($name, $noInclude = false) {
		if ($noInclude == TRUE) {
			require 'Views/admincp/' . $name . '.php';
		} else {
			require 'Views/admincp/header.php';
			require 'Views/admincp/' . $name . '.php';
			require 'Views/admincp/footer.php';
		}
	}

	public function render_spaCMS($name, $noInclude = false) {
		if ($noInclude == TRUE) {
			require 'Views/spaCMS/' . $name . '.php';
		} else {
			require 'Views/spaCMS/header.php';
			require 'Views/spaCMS/' . $name . '.php';
			require 'Views/spaCMS/footer.php';
		}
	}

}
