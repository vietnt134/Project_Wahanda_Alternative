<?php

	/**
	 * 
	 */
	class introbusiness extends Controller {
		
		function __construct() {
			parent::__construct();
		}
		
		function index() {
			$this->view->style = array(
				URL . 'Views/introbusiness/css/introbusiness.css'
			);

			$this->view->script = array(
				URL . 'Views/introbusiness/js/introbusiness.js'
			);

			$this->view->render('introbusiness/index');
		}
		
	}