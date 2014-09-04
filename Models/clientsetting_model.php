<?php
/**
 *
 */
class clientsetting_model extends Model {

	function __construct() {
		parent::__construct();
	}

	function loadUserDetail() {
		Session::init();
		echo json_encode($this -> db -> select('SELECT client_email, client_name, client_username, client_creditpoint, client_giftpoint, client_phone, client_sex FROM client WHERE client_id=' . $_SESSION['client_id']));
	}

	function getPass() {
		Session::init();
		return $this -> db -> select('SELECT client_pass FROM client WHERE client_id=' . $_SESSION['client_id']);
	}

	function changePass($data) {
		$update = $this -> db -> prepare("UPDATE client SET client_pass ='".$data['client_pass']."' WHERE client_id=".$data['client_id']);
		$update -> execute();
		if ($update -> rowCount() > 0) {
			echo 200;
		} else {
			echo 2;
		}
	}

}
?>