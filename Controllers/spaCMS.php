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
		
		function home() {
			// Auth::handleLogin();
			
			$this->view->script = array(
				URL . 'Views/spaCMS/home/js/default.js'
			);

			$this->view->render_spaCMS('home/index');
		}

		function menu() {
			// Auth::handleLogin();

			$this->view->script = array(
				URL . 'Views/spaCMS/menu/js/default.js'
			);

			$this->view->render_spaCMS('menu/index');
		}	

		function reports() {
			// Auth::handleLogin();
			$this->view->style = array(
				URL . 'Views/spaCMS/reports/css/spaCMS_reports.css'
			);

			$this->view->script = array(
				URL . 'Views/spaCMS/reports/js/default.js'
			);

			$this->view->render_spaCMS('reports/index');
		}	

		function settings() {
			// Auth::handleLogin();
			$this->view->style = array(
				URL . 'Views/spaCMS/settings/css/spaCMS_settings.css'
			);

			$this->view->render_spaCMS('settings/index');
		}	

		function calendar() {
			// Auth::handleLogin();

			$this->view->style = array(
				URL . 'Views/spaCMS/calendar/css/spaCMS_calendar.css',
				URL . 'public/assets/plugins/fullcalendar-2.1.0-beta2/fullcalendar.css'
				// URL . 'public/assets/plugins/fullcalendar-2.1.0-beta2/fullcalendar.print.css'
			);

			$this->view->script = array(
				URL . 'public/assets/plugins/fullcalendar-2.1.0-beta2/lib/moment.min.js',
				URL . 'public/assets/plugins/fullcalendar-2.1.0-beta2/lib/jquery-ui.custom.min.js',
				URL . 'public/assets/plugins/fullcalendar-2.1.0-beta2/fullcalendar.min.js',
				URL . 'Views/spaCMS/calendar/js/spaCMS_calendar.js'
			);

			$this->view->render_spaCMS('calendar/index');
		}	
	}