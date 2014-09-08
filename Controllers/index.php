<?php

/**
 *
 */
class Index extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this -> view -> render('index');
	}
	
	function loadServiceList(){
		$this -> model -> loadServiceList();
	}
	
	function loadServiceDetail(){
		$user_service_id = $_POST['user_service_id'];
		$this -> model -> loadServiceDetail($user_service_id);
	}
}
