<?php
/**
 * 
 */
class clientsetting extends Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index(){
		Auth::handleClientLogin();
		$this -> view -> script = array(URL . 'Views/clientsetting/js/default.js');
		$this -> view -> render('clientsetting/index');
	}
	
	function loadUserDetail(){
		Auth::handleClientLogin();
		$this -> model -> loadUserDetail();
	}
	
	function changePass(){
		Auth::handleClientLogin();
		$data['client_id'] = Session::get('client_id');
		$client_pass = $this -> model ->getPass();
		$client_old_pass = Hash::create('md5', $_POST['client_old_pass'], HASH_PASSWORD_KEY);
		if($client_pass[0]['client_pass'] != $client_old_pass){
			echo -2;
			exit;
		}
		if($_POST['client_old_pass'] == '' || $_POST['client_pass_1'] == '' || $_POST['client_pass_2'] == ""){
			echo -1;
			exit;
		}
		if(strlen($_POST['client_pass_1']) < 6 || strlen($_POST['client_pass_2']) < 6){
			echo 0;
			exit;
		}
		if($_POST['client_pass_1'] != $_POST['client_pass_2']){
			echo 1;
			exit;
		}
		$data['client_pass'] = Hash::create('md5', $_POST['client_pass_2'], HASH_PASSWORD_KEY);
		$this -> model -> changePass($data);
	}
	function editUserDetail(){
		Auth::handleClientLogin();
		if(isset($_POST['client_name'])){
			if($_POST['client_name'] == ''){
				echo 0;
				exit;
			}
			$data['client_name'] = $_POST['client_name'];
			$this -> model -> editUserDetail($data);
		}else if(isset($_POST['client_phone'])){
			if($_POST['client_phone'] == ''){
				echo 0;
				exit;
			}
			if(is_numeric($_POST['client_phone']) == false){
				echo -1;
				exit;
			}
			if(strlen($_POST['client_phone'])<9){
				echo -2;
				exit;
			}
			$data['client_phone'] = $_POST['client_phone'];
			$this -> model -> editUserDetail($data);
		}	
	}
}

?>