<?php
/**
 *
 */
class requestpass extends Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this -> view -> script = array(URL . 'Views/requestpass/js/default.js');
		$this -> view -> render('requestpass/index');
	}

}
?>