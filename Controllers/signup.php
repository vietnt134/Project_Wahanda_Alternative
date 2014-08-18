<?php
/**
 *
 */
class signup extends Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this -> view -> script = array(URL . 'Views/signup/js/default.js');
		$this -> view -> render('signup/index', TRUE);
	}

}
?>