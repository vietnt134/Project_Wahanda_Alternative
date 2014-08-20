<?php
/**
 *
 */
class clientsignup extends Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this -> view -> script = array(URL . 'Views/clientsignup/js/default.js');
		$this -> view -> render('clientsignup/index');
	}
	

}
?>