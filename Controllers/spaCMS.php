<?php

	/**
	 * 
	 */
	class SpaCMS extends Controller {
		
		function __construct() {
			parent::__construct();
		}
		
		function index() {
			$this->view->render_spaCMS('index');
		}
		
	}