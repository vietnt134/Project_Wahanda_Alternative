<?php
/**
 * 
 */
class index_model extends Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function loadServiceList(){
		$select = $this -> db ->select('SELECT * 
							   FROM `user_service` 
							   WHERE `user_service_delete_flg` = 0 order by `user_service_id` desc 
							   limit 3');
		echo json_encode($select);
	}
}

?>