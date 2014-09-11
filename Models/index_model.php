<?php
/**
 *
 */
class index_model extends Model {

	function __construct() {
		parent::__construct();
	}

	function loadServiceList() {
		$select = $this -> db -> select('SELECT * 
							   FROM `user_service` 
							   WHERE `user_service_delete_flg` = 0 order by `user_service_id` desc 
							   limit 3');
		echo json_encode($select);
	}

	function loadServiceDetail($user_service_id = 1) {
		
		$query=<<<SQL
SELECT 
user_service.`user_service_id`,
user_service.`user_service_name`,
user_service.`user_service_duration`,
user_service.`user_service_full_price`,
user_service.`user_service_sale_price`,
user_service.`user_service_status`,
user_service.`user_service_image`,
user_service.`user_service_description`,
user_service.`user_service_use_evoucher`,
user_service.`user_service_group_id`,
user_service.`user_service_service_id`,
user.`user_business_name`,
user.`user_description`,
user.`user_open_hour`,
user.`user_is_use_voucher`,
user.`user_long`,
user.`user_lat`,
user.`user_address`,
user.`user_contact_phone`,
user.`user_contact_email`,
user.`user_limit_before_service`,
user.`user_limit_before_booking`,
group_service.`group_service_name`,
DAYOFWEEK(CURRENT_DATE) AS day_of_week,
DAYOFMONTH(CURRENT_DATE) AS day_of_month,
YEAR(CURRENT_DATE) AS year,
MONTH(CURRENT_DATE) AS month
FROM user_service,user,group_service
WHERE user.user_id = group_service.group_service_user_id
AND user_service.user_service_group_id = group_service.group_service_id
AND`user_service_delete_flg` = 0 AND `user_service_id`= {$user_service_id}
SQL;
		
		$select = $this -> db -> select($query);
		echo json_encode($select);
	}

}
?>