<?php

	/**
	 * 
	 */
	class contact extends Controller {
		
		function __construct() {
			parent::__construct();
		}
		
		function index() {
			$this->view->style = array(
				URL . 'Views/contact/css/contact.css'
			);

			$this->view->script = array(
				URL . 'Views/contact/js/contact.js'
			);

			$this->view->render('contact/index');
		}
		
	}