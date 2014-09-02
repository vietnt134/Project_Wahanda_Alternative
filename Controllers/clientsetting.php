<?php
/**
 * 
 */
class clientsetting extends Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index(){
		Auth::handleClientLogin();
		$this -> view -> script = array(URL . 'Views/clientsetting/js/default.js');
		$this -> view -> render('clientsetting/index');
	}
}

?>