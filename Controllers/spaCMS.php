<?php

	/**
	 * 
	 */
	class SpaCMS extends Controller {
		
		function __construct() {
			parent::__construct();
		}
		
		function index() {
			Session::init();
			if(Session::get('spaCMS')) {
				header('location:' . URL . 'spaCMS/home');
			} else {
				$this->view->render_spaCMS('index', true);
			}
		}

		function login() {
			$this->model->login();
		}

		function logout() {
			$this->model->logout();
		}
		
		function home() {
			Auth::handleSpaCMSLogin();
			
			$this->view->script = array(
				URL . 'Views/spaCMS/home/js/spaCMS_home.js'
			);

			if($xhr == 'xhrGet'){
				$this->model->getList_datVe();
			}
			elseif($xhr == 'xhrInsert'){
				$this->model->insert_datVe();
			}
			elseif($xhr == 'xhrUpdate'){
				$this->model->update_datVe();
			}
			elseif($xhr == 'xhrDelete'){
				$this->model->delete_datVe();
			}
			else {
				$this->view->render_spaCMS('home/index');
			}
		}

		function menu() {
			Auth::handleSpaCMSLogin();

			$this->view->script = array(
				URL . 'Views/spaCMS/menu/js/spaCMS_menu.js'
			);

			$this->view->render_spaCMS('menu/index');
		}
		

		function calendar() {
			Auth::handleSpaCMSLogin();

			$this->view->style = array(
				ASSETS . 'plugins/fullcalendar-2.1.0-beta2/fullcalendar.css',
				URL . 'Views/spaCMS/calendar/css/spaCMS_calendar.css'
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
			Auth::handleSpaCMSLogin();
			$this->view->style = array(
				URL . 'Views/spaCMS/reports/css/spaCMS_reports.css'
			);

			$this->view->script = array(
				URL . 'Views/spaCMS/reports/js/spaCMS_reports.js'
			);

			$this->view->render_spaCMS('reports/index');
		}	

		function settings( $xhr = false ) {
			Auth::handleSpaCMSLogin();

			switch ($xhr) {
				case 'xhrGet_country':
					$this->model->get_country();
					break;

				case 'xhrGet_user_detail':
					$this->model->get_user_detail();
					break;
				
				case 'xhrUpdate_user_detail':
					$this->model->update_user_detail();
					break;	

				case 'xhrGet_type_business':
					$this->model->get_type_business();
					break;	

				default:
					$this->view->style = array(
						ASSETS . 'plugins/image-manager/css/image-manager.min.css',
						URL . 'Views/spaCMS/settings/css/spaCMS_settings.css'
					);

					$this->view->script = array(
						ASSETS . 'plugins/image-manager/js/image-manager.min.js',
						URL . 'Views/spaCMS/settings/js/spaCMS_settings.js'
					);

					$this->view->render_spaCMS('settings/index');
					break;
			}
		}		
	}