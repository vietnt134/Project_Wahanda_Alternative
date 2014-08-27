<?php

	/**
	 * 
	 */
	class service extends Controller {
		
		function __construct() {
			parent::__construct();
		}
		
		function index() {
			$this->view->style = array(
				URL . 'Views/service/css/service.css'
			);

			$this->view->script = array(
				URL . 'Views/service/js/service.js'
			);

			$this->view->render('service/index');
		}
		
	}