<?php

class Spacms_Model extends Model {
	function __construct(){
		parent::__construct();
	}

	function login(){
		$user_email 	= $_POST['user_email'];
		$user_password 	= $_POST['user_password'];
		$sql = "SELECT user_id FROM user WHERE user_email = :user_email AND user_password = :user_password";

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
	function update_user_detail() {
		$user_id = Session::get('user_id');
		$data = array(
				'user_full_name'	=> $_GET['user_full_name'],
				'user_logo'			=> $_GET['user_logo'],
				'user_business_id'	=> $_GET['user_business_id'],
				'user_address'		=> $_GET['user_address'],
				'user_phone'		=> $_GET['user_phone'],
				// 'user_post_code'	=> $_GET['user_post_code'],
				'user_country_id'	=> $_GET['user_country_id'],
				'user_description'	=> $_GET['user_description']
				// 'user_website'		=> $_GET['user_website'],
				// 'user_facebook'		=> $_GET['user_facebook'],
				// 'user_googleplus'	=> $_GET['user_googleplus']
			);
		
		$sth = $this->db->update('user', $data, "user_id = '$user_id'");
		if($sth->affected_rows() >= 0){
			return json_encode(array(
				'success' 	=> true,
				'messages' 	=> null,
				'data' 		=> array()
			));
		} else {
			return json_encode(array(
				'success' 	=> false,
				'messages' 	=> null,
				'data' 		=> array()
			));
		}
		
	}

	function delete_User() {
		$id = $_POST['user_id'];
		$delete = $this->db->delete('user', "user_id = '$id'");
	}

	function update_User() {
		$id = $_POST['edit_user_id'];
		$pass = Hash::create('md5', $_POST['edit_user_password'], HASH_PASSWORD_KEY);
		$old_pass = $this->db->select("SELECT user_password FROM user WHERE user_id = '$id'");
		 // echo $old_pass[0]['user_password'] .'</br>' ;
		 // echo $pass;
		if($pass == $old_pass[0]['user_password']){
			$data = array(
				'user_password'=> Hash::create('md5', $_POST['edit_user_new_password'], HASH_PASSWORD_KEY),
				'user_level_id'=> $_POST['edit_user_level_id']
			);
			$sth = $this->db->update('user', $data, "user_id = '$id'");
			if($sth->affected_rows() >= 0){
				echo 'success';
				return;
			}
		}
		
		echo 'error';
	}

}