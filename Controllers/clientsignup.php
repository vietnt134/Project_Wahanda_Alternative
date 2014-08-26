<?php
/**
 *
 */
class clientsignup extends Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this -> view -> script = array(URL . 'Views/clientsignup/js/default.js');
		$this -> view -> render('clientsignup/index');
	}

	public function signup() {
		$data['client_name'] = $_POST['client_name'];
		$data['client_email'] = $_POST['client_email'];
		$data['client_pass'] = $_POST['client_pass'];
		$data['client_phone'] = $_POST['client_phone'];
		$data['client_postcode'] = $_POST['client_postcode'];
		$data['client_username'] = $_POST['client_username'];
		$data['client_sex'] = $_POST['client_sex'];
		$data['client_creditpoint'] = 0;
		$data['client_giftpoint'] = 0;
		if ($data['client_pass'] == "" || $data['client_phone'] == "" || $data['client_username'] == "" || $data['client_email'] == "") {
			if (is_numeric($data['client_phone']) == false || strlen($data['client_phone']) < 9 || strlen($data['client_pass']) < 6) {
				header("Location:" . URL . "clientsignup");
			}
		}
		$this -> model -> signup($data);
	}
	
	public function hasEmail(){
		$client_email = $_POST['email'];
		$count = $this->model->hasEmail($client_email);
	}

}
?>