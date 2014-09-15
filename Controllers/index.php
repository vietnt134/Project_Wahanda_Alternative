<?php

/**
 *
 */
class Index extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this -> view -> render('index');
	}

	function loadTopServiceList() {
		$this -> model -> loadTopServiceList();
	}

	function loadNewServiceList() {
		$this -> model -> loadNewServiceList();
	}

	function loadServiceDetail() {
		$user_service_id = $_POST['user_service_id'];
		$this -> model -> loadServiceDetail($user_service_id);
	}

	function getBookingInfo() {
		Session::init();
		if (empty($_SESSION['booking_detail'])) {
			$index = 0;
			foreach ($_POST as $key => $value) {
				$_SESSION['booking_detail'][$index][$key] = $value;
			}
		} else {
			$index = count($_SESSION['booking_detail']);
			foreach ($_SESSION['booking_detail'] as $key => $value) {
				if ($value['user_service_id'] == $_POST['user_service_id'] && $value['booking_detail_date'] == $_POST['booking_detail_date'] && $value['booking_detail_time'] == $_POST['booking_detail_time']) {
					$_SESSION['booking_detail'][$key]['booking_quantity'] = $value['booking_quantity'] + 1;
					echo($index);
					return FALSE;
				}
			}
			foreach ($_POST as $key => $value) {
				$_SESSION['booking_detail'][$index][$key] = $value;
			}
		}
		// echo "<pre/>";
		// print_r($_SESSION['booking_detail']);
		echo($index + 1);
	}

	public function shoppingCartDetail() {
		Session::init();
		if (isset($_SESSION['booking_detail'])) {
			echo json_encode($_SESSION['booking_detail']);
		} else {
			echo '[]';
		}
	}

	public function updateShoppingCart() {
		Session::init();
		if (isset($_SESSION['booking_detail']) && isset($_POST['quantity_list'])) {
			$quantity_list = rtrim($_POST['quantity_list'], ',');
			$quantity_list = explode(',', $quantity_list);
			foreach ($_SESSION['booking_detail'] as $key => $value) {
				$_SESSION['booking_detail'][$key]['booking_quantity'] = $quantity_list[$key];
			}
			foreach ($_SESSION['booking_detail'] as $key => $value) {
				if($_SESSION['booking_detail'][$key]['booking_quantity'] == 0){
					unset($_SESSION['booking_detail'][$key]);
				}
			}
			echo count($_SESSION['booking_detail']);
		}
	}

}
?>