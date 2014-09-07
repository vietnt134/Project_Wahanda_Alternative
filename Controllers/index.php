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
}
