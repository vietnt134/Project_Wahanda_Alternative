<?php

	/**
	 * 
	 */
	class servicelocation extends Controller {
		
		function __construct() {
			parent::__construct();
		}
		
		function index() {
			$this->view->style = array(
				URL . 'Views/servicelocation/css/servicelocation.css'
			);

			$this->view->script = array(
				URL . 'Views/servicelocation/js/servicelocation.js'
			);

			$this->view->render('servicelocation/index');
		}
		
	}