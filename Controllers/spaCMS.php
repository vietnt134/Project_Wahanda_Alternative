<?php

	/**
	 * 
	 */
	class SpaCMS extends Controller {
		
		function __construct() {
			parent::__construct();
		}
		
		function index() {
			$this->view->render_spaCMS('index', true);
		}
		
		function dashboard() {
			// Auth::handleLogin();
			$this->view->render_spaCMS('dashboard/index');
		}

		function menu() {
			// Auth::handleLogin();
			$this->view->render_spaCMS('menu/index');
		}	

		function reports() {
			// Auth::handleLogin();
			$this->view->render_spaCMS('reports/index');
		}	

		function settings() {
			// Auth::handleLogin();
			$this->view->render_spaCMS('settings/index');
		}	

		function calendar() {
			// Auth::handleLogin();
			$this->view->render_spaCMS('calendar/index');
		}	
	}