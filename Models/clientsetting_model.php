<?php
/**
 * 
 */
class clientsetting_model extends Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function loadUserDetail(){
		Session::init();
		echo json_encode($this -> db ->select('SELECT client_email, client_name, client_username, client_creditpoint, client_giftpoint, client_phone, client_sex FROM client WHERE client_id='.$_SESSION['client_id']));
	}
}

?>