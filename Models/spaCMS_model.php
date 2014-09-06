<?php

class Spacms_Model extends Model {
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


	///////////////////////////// SETTING //////////////////////////
	function get_type_business() {
		$query = "SELECT * FROM type_business";
		$result = $this->db->select($query);
		echo json_encode($result);
	}

	function get_country() {
		$query = "SELECT * FROM country";	
		$result = $this->db->select($query);
		echo json_encode($result);
	}

	function get_user_detail() {
		$user_id = Session::get('user_id');
		$query = "SELECT * FROM user WHERE user_id = $user_id";
		$result = $this->db->select($query);
		echo json_encode($result);
	}

	function update_user_detail() {
		$user_id = Session::get('user_id');
		$data = array(
				'user_business_name'	=> $_GET['user_business_name'],
				'user_logo'				=> $_GET['user_logo'],
				'user_type_business_id'	=> $_GET['user_type_business_id'],
				'user_address'		=> $_GET['user_address'],
				'user_phone'		=> $_GET['user_phone'],
				'user_country_id'	=> $_GET['user_country_id'],
				'user_description'	=> $_GET['user_description'],
				'user_website'		=> $_GET['user_website'],
				'user_facebook'		=> $_GET['user_facebook'],
				'user_googleplus'	=> $_GET['user_googleplus']
				// 'user_silde'		=> $_GET['user_silde']
			);
		
		$sth = $this->db->update('user', $data, "user_id = $user_id");

		if($sth){
			echo json_encode(array(
				'success' 	=> true,
				'messages' 	=> null,
				'data' 		=> array()
			));
		} else {
			echo json_encode(array(
				'success' 	=> false,
				'messages' 	=> null,
				'data' 		=> array()
			));
		}
		
	}


	function get_user_open_hour() {
		$user_id = Session::get('user_id');
		$query = "SELECT user_open_hour FROM user WHERE user_id = $user_id";
		$result = $this->db->select($query);
		echo $result[0]['user_open_hour'];
	}

	function update_user_open_hour() {
		$user_id = Session::get('user_id');
		$user_open_hour_from = $_GET['user_open_hour_from'];
		$user_open_hour_to = $_GET['user_open_hour_to'];

		print_r($user_open_hour_from); die;

		$user_open_hour = '';

		$data = array(
				'user_open_hour' => $user_open_hour,
			);

		$sth = $this->db->update('user', $data, "user_id = $user_id");

		// if($sth){
		// 	echo json_encode(array(
		// 		'success' 	=> true,
		// 		'messages' 	=> null,
		// 		'data' 		=> array()
		// 	));
		// } else {
		// 	echo json_encode(array(
		// 		'success' 	=> false,
		// 		'messages' 	=> null,
		// 		'data' 		=> array()
		// 	));
		// }
		
	}



	function get_user_company() {
		$user_id = Session::get('user_id');
		$query = "SELECT user_company_name, user_company_delegate, user_company_tax_code,"
		."user_company_address, user_company_country_id, "
		."user_contact_name, user_contact_email, user_contact_phone, user_contact_role "
		."FROM user "
		."WHERE user_id = $user_id";
		$result = $this->db->select($query);
		echo json_encode($result);
	}

	function update_user_company() {
		$user_id = Session::get('user_id');
		$data = array();
		foreach ($_GET as $key => $value) {
			if($key == "url") {
				continue;
			}
			$data["$key"] = $value;
		}
 		// print_r($data); die;
		$sth = $this->db->update('user', $data, "user_id = $user_id");

		if($sth){
			echo json_encode(array(
				'success' 	=> true,
				'messages' 	=> null,
				'data' 		=> array()
			));
		} else {
			echo json_encode(array(
				'success' 	=> false,
				'messages' 	=> null,
				'data' 		=> array()
			));
		}
	}


	function get_user_bank_acc() {
		$user_id = Session::get('user_id');
		$query = "SELECT user_bank_acc_owner, user_bank_acc, user_bank_branch, 
		user_bank_name, user_bank_address
		FROM user 
		WHERE user_id = $user_id";
		$result = $this->db->select($query);
		echo json_encode($result);
	}

	function update_user_bank_acc() {
		$user_id = Session::get('user_id');
		$data = array();
		foreach ($_GET as $key => $value) {
			if($key == "url") {
				continue;
			}
			$data["$key"] = $value;
		}
		$sth = $this->db->update('user', $data, "user_id = $user_id");

		if($sth){
			echo json_encode(array(
				'success' 	=> true,
				'messages' 	=> null,
				'data' 		=> array()
			));
		} else {
			echo json_encode(array(
				'success' 	=> false,
				'messages' 	=> null,
				'data' 		=> array()
			));
		}
	}

}