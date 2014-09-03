<?php

class Spacms_Model extends Model {
	function __construct(){
		parent::__construct();
	}

	function login(){

		$sql = "SELECT user_id FROM user WHERE user_email = :user_email AND user_password = :user_password";

		$user = array(
				':user_email' 		=> $_POST['user_email'],
				':user_password' 	=> Hash::create('md5', $_POST['user_password'], HASH_PASSWORD_KEY)
			);

		$sth = $this->db->prepare($sql);
		$sth->execute($user);
		$count = $sth->rowCount();

		if($count > 0){
			Session::init();
			Session::set('Admin', true);
			Session::set('loggedIn', 'Day la logged');
			header('location:'.URL.'admincp/dashboard');
		} else {
			header('location:'.URL.'admincp');
			return false;
		}

	}

	function logout() {
		Session::init();
		Session::destroy();
		header('location:'.URL.'admincp');
		exit;
	}


	///////////////////////////// USER //////////////////////////
	function getList_User(){
		$query = "SELECT * FROM user, user_level WHERE user.user_level_id = user_level.user_level_id";
		$result = $this->db->select($query);
		echo json_encode($result);
	}
	
	function insert_User() {
		$data = array(
				'user_email'	=> $_POST['user_email'],
				'user_password'	=> Hash::create('md5', $_POST['user_password'], HASH_PASSWORD_KEY),
				'user_level_id'	=> $_POST['user_level_id']
			);
		
		if($this->db->insert('user', $data)){
			echo 'success';
		} else {
			echo 'error';
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