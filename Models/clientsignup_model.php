<?php

/**
 *
 */
class clientsignup_model extends Model {

	function __construct() {
		parent::__construct();
	}

	public function signup($data) {
		// echo '<pre/>';
		// print_r($data);
		// exit;
		Session::init();
		$insert = $this -> db -> insert('client', $data);
		if ($insert) {
			Session::set('checkSignup', TRUE);
			header("Location:" . URL . "homepage");
		} else {
			Session::set('checkSignup', FALSE);
			header("Location:" . URL . "clientsignup");
		}
	}

	public function checkExistEmail($client) {
		$select = $this -> db -> select("SELECT COUNT(*) as count FROM client WHERE client_email='" . $client . "'");
		echo json_encode($select);
	}

	public function checkExistUsername($client) {
		$select = $this -> db -> select("SELECT COUNT(*) as count FROM client WHERE client_username='" . $client . "'");
		echo json_encode($select);
	}

	public function checkExistToken($client) {
		$select = $this -> db -> prepare("SELECT client_verify FROM client WHERE client_verify='" . $client . "'");
		$select -> execute();
		return $select -> rowCount();
	}

	public function verify($verify){
		$data['client_is_active'] = 1;
		$update = $this -> db ->update('client', $data, "client_verify='".$verify."'");
		if ($update != 0) {
			header("Location:" . URL . "homepage");
		} else {
			header("Location:" . URL . "clientsignup");
		}
	}

}
?>