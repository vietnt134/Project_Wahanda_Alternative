<?php

/**
 *
 */
class requestpass_model extends Model {

	function __construct() {
		parent::__construct();
	}

	public function sendRequestPassword($data) {
		Session::init();
		$update = $this -> db -> prepare("UPDATE client set client_pass = '" . $data['new_pass'] . "' WHERE client_email='" . $data['client_email'] . "'");
		$update -> execute();
		if ($update -> rowCount() == 0) {
			Session::set('checkReq', FALSE);
			header("Location:" . URL . "requestpass");
		} else {
			Session::set('checkReq', TRUE);
			header("Location:" . URL . "requestpass");
		}
	}

	public function checkEmailExistPassRequest($client) {
		$select = $this -> db -> select("SELECT COUNT(*) as count FROM client WHERE client_email='" . $client . "'");
		echo json_encode($select);
	}

}
?>