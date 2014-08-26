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
	
	public function hasEmail($client_email){
		$select = $this -> db ->select("SELECT COUNT(*) as count FROM client WHERE client_email='".$client_email."'");
		echo json_encode($select);
	}

}
?>