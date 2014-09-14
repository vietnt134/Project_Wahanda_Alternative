<?php
require (dirname(__FILE__).'/spaCMS_model/spaCMS_home_model.php');
require (dirname(__FILE__).'/spaCMS_model/spaCMS_calendar_model.php');
require (dirname(__FILE__).'/spaCMS_model/spaCMS_menu_model.php');
require (dirname(__FILE__).'/spaCMS_model/spaCMS_reports_model.php');
require (dirname(__FILE__).'/spaCMS_model/spaCMS_settings_model.php');

class SpaCMS_Model extends Model {
	function __construct(){
		parent::__construct();
	}

	function login(){
		$user_email 	= $_POST['user_email'];
		$user_password 	= $_POST['user_password'];
		$sql = "SELECT user_id, user_business_name FROM user WHERE user_email = :user_email AND user_password = :user_password";

		$user = array(
				':user_email' 		=> $user_email,
				':user_password' 	=> Hash::create('md5', $user_password, HASH_PASSWORD_KEY)
			);

		$sth = $this->db->prepare($sql);
		$sth->execute($user);
		$count = $sth->rowCount();

		if($count > 0){
			$result = $sth->fetch(PDO::FETCH_ASSOC);
			Session::init();
			Session::set('spaCMS', true);
			Session::set('user_id', $result['user_id']);
			Session::set('user_email', $user_email);
			Session::set('user_business_name', $result['user_business_name']);
			header('location:'.URL.'spaCMS/home');
		} else {
			header('location:'.URL.'spaCMS');
			return false;
		}

	}

	function logout() {
		Session::init();
		Session::destroy();
		header('location:'.URL.'spaCMS');
		exit;
	}


	///////////////////////////// REPORTS //////////////////////////
	function get_list_booking() {
		SpaCMS_Reports_Model::get_list_booking();
	}

	///////////////////////////// SETTING //////////////////////////
	function get_type_business() {
		SpaCMS_Settings_Model::get_type_business();
	}

	function get_country() {
		SpaCMS_Settings_Model::get_country();
	}

	function get_user_detail() {
		SpaCMS_Settings_Model::get_user_detail();
	}

	function update_user_detail() {
		SpaCMS_Settings_Model::update_user_detail();
	}


	function get_user_open_hour() {
		SpaCMS_Settings_Model::get_user_open_hour();
	}

	function update_user_open_hour() {
		SpaCMS_Settings_Model::update_user_open_hour();
		
	}

	function get_user_is_use_voucher() {
		SpaCMS_Settings_Model::get_user_is_use_voucher();
	}

	function update_user_is_use_voucher() {
		SpaCMS_Settings_Model::update_user_is_use_voucher();
	}

	function get_user_company() {
		SpaCMS_Settings_Model::get_user_company();
	}

	function update_user_company() {
		SpaCMS_Settings_Model::update_user_company();
	}


	function get_user_bank_acc() {
		SpaCMS_Settings_Model::get_user_bank_acc();
	}

	function update_user_bank_acc() {
		SpaCMS_Settings_Model::update_user_bank_acc();
	}

}