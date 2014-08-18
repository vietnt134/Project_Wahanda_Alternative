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
		

		function calendar() {
			// Auth::handleLogin();

			$this->view->style = array(
				URL . 'Views/spaCMS/calendar/css/spaCMS_calendar.css',
				ASSETS . 'plugins/fullcalendar-2.1.0-beta2/fullcalendar.css'
				// URL . 'public/assets/plugins/fullcalendar-2.1.0-beta2/fullcalendar.print.css'
			);

			$this->view->script = array(
				ASSETS . 'plugins/fullcalendar-2.1.0-beta2/lib/moment.min.js',
				ASSETS . 'plugins/fullcalendar-2.1.0-beta2/fullcalendar.min.js',
				URL . 'Views/spaCMS/calendar/js/spaCMS_calendar.js'
			);

			$this->view->render_spaCMS('calendar/index');
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
				ASSETS . 'plugins/image-manager/css/image-manager.min.css',
				URL . 'Views/spaCMS/settings/css/spaCMS_settings.css'
			);

			$this->view->script = array(
				ASSETS . 'plugins/image-manager/js/image-manager.min.js',
				URL . 'Views/spaCMS/settings/js/spaCMS_settings.js'
			);

			$this->view->render_spaCMS('settings/index');
		}		
	}