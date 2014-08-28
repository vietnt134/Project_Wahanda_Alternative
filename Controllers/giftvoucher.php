<?php

	/**
	 * 
	 */
	class giftvoucher extends Controller {
		
		function __construct() {
			parent::__construct();
		}
		
		function index() {
			$this->view->style = array(
				URL . 'Views/giftvoucher/css/giftvoucher.css'
			);

			$this->view->script = array(
				URL . 'Views/giftvoucher/js/giftvoucher.js'
			);

			$this->view->render('giftvoucher/index');
		}
		
	}