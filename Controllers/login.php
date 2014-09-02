<?php
/**
 * 
 */
class login extends Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function login(){
		$email_login = $_POST['email'];
		$pass_login = $_POST['pass'];
	}
}

?>