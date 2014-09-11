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


	///////////////////////////// REPORTS //////////////////////////
	function get_list_booking() {
		$iTotalRecords = 178;
		$iDisplayLength = intval($_REQUEST['iDisplayLength']);
		$iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength; 
		$iDisplayStart = intval($_REQUEST['iDisplayStart']);
		$sEcho = intval($_REQUEST['sEcho']);

		$records = array();
		$records["aaData"] = array(); 

		$end = $iDisplayStart + $iDisplayLength;
		$end = $end > $iTotalRecords ? $iTotalRecords : $end;

		$status_list = array(
		array("success" => "Pending"),
		array("info" => "Closed"),
		array("danger" => "On Hold"),
		array("warning" => "Fraud")
		);

		for($i = $iDisplayStart; $i < $end; $i++) {
		$status = $status_list[rand(0, 2)];
		$id = ($i + 1);
		$records["aaData"][] = array(
		  '<input type="checkbox" name="id[]" value="'.$id.'">',
		  $id,
		  '12/09/2013',
		  'Jhon Doe',
		  'Jhon Doe',
		  '450.60$',
		  rand(1, 10),
		  '<span class="label label-sm label-'.(key($status)).'">'.(current($status)).'</span>',
		  '<a href="javascript:;" class="btn btn-xs default"><i class="fa fa-search"></i> View</a>',
		);
		}

		if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action") {
		$records["sStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
		$records["sMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
		}

		$records["sEcho"] = $sEcho;
		$records["iTotalRecords"] = $iTotalRecords;
		$records["iTotalDisplayRecords"] = $iTotalRecords;

		echo json_encode($records);
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
		$data = array();
		foreach ($_POST as $key => $value) {
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

	function get_user_is_use_voucher() {
		$user_id = Session::get('user_id');
		$query = "SELECT user_is_use_voucher FROM user WHERE user_id = $user_id";
		$result = $this->db->select($query);
		echo $result[0]['user_is_use_voucher'];
	}

	function update_user_is_use_voucher() {
		$user_id = Session::get('user_id');
		$data = array('user_is_use_voucher'=>false);
		if(isset($_POST['user_is_use_voucher'])) {
			$data['user_is_use_voucher'] = $_POST['user_is_use_voucher'];
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