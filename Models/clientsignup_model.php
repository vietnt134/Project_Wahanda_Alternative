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
		$insert = $this -> db -> insert('client', $data);
		if ($insert) {
			header("Location:" . URL . "homepage");
		} else {
			header("Location:" . URL . "clientsignup");
		}
	}
	
	public function checkExistEmail($client){
		$select = $this -> db ->select("SELECT COUNT(*) as count FROM client WHERE client_email='".$client."'");
		echo json_encode($select);
	}
	public function checkExistUsername($client){
		$select = $this -> db ->select("SELECT COUNT(*) as count FROM client WHERE client_username='".$client."'");
		echo json_encode($select);
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