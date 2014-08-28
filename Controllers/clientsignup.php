<?php
/**
 *
 */
class clientsignup extends Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this -> view -> script = array(URL . 'Views/clientsignup/js/default.js');
		$this -> view -> render('clientsignup/index');
	}

	public function signup() {
		//Dữ liệu input từ form
		$data['client_name'] = $_POST['client_name'];
		$data['client_email'] = $_POST['client_email'];
		$data['client_pass'] = Hash::create('md5', $_POST['client_pass'], HASH_PASSWORD_KEY);
		$data['client_phone'] = $_POST['client_phone'];
		$data['client_postcode'] = $_POST['client_postcode'];
		$data['client_username'] = $_POST['client_username'];
		$data['client_sex'] = $_POST['client_sex'];
		$data['client_creditpoint'] = 0;
		$data['client_giftpoint'] = 0;
		$data['client_verify'] = md5(uniqid(rand(),TRUE));
		$data['client_is_active'] = 0;
		//Kiểm tra chuỗi token
		for($i=0;;$i++){
			$check_verify_code = $this -> model -> checkExistToken($data['client_verify']);
			if($check_verify_code == 0){
				break;
			}else{
				$data['client_verify'] = md5(uniqid(rand(),TRUE));
			}
		}
		//Kiểm tra dữ liệu đăng ký
		if ($data['client_pass'] == "" || $data['client_phone'] == "" || $data['client_username'] == "" || $data['client_email'] == "") {
			if (is_numeric($data['client_phone']) == false || strlen($data['client_phone']) < 9 || strlen($data['client_pass']) < 6) {
				header("Location:" . URL . "clientsignup");
			}
		}
		//Nội dung email
		$body = '<h1>Chào mừng đến với WAHANDA</h1>';
		$body .= '<p>Xin chào bạn: <strong>' . $data['client_name'] . '</strong></p>';
		$body .= '<p>Để có thể sử dụng tài khoản click vào link dưới để active : </p>  
				  <a href="http:'.URL.'clientsignup/VrcFl/'.$data['client_verify'].'" >'.$data['client_verify'].'</a>';
		$body .= '<p>Mật khẩu đăng nhập WAHANDA của bạn là: <strong>' . $_POST['client_pass'] . '</strong></p>';
		$body .= '<p>Chúc một ngày mới tốt lành</p>';
		$body .= '<div align="right"><small><i><b>Ban quản trị Wahanda</b></i></small></div>';

		//Gửi mail local
		$mail = new PHPMailer(TRUE);
		$mail -> CharSet = "UTF-8";
		// create a new object
		$mail -> IsSMTP();
		// enable SMTP
		$mail -> SMTPDebug = 1;
		// debugging: 1 = errors and messages, 2 = messages only
		$mail -> SMTPAuth = true;
		// authentication enabled
		$mail -> SMTPSecure = 'ssl';
		// secure transfer enabled REQUIRED for GMail
		$mail -> Host = "smtp.gmail.com";
		$mail -> Port = 465;
		// or 587
		$mail -> IsHTML(true);
		$mail -> Username = "vietnt134@gmail.com";
		$mail -> Password = "whatdidyoudo1341996";
		$mail -> SetFrom("wahanda@gmail.com");
		$mail -> Subject = "Xác nhận thông tin đăng ký từ Wahanda!";
		$mail -> Body = $body;
		$mail -> AddAddress($data['client_email']);
		if (!$mail -> Send()) {
			echo "Mailer Error: " . $mail -> ErrorInfo;
		} else {
			$this -> model -> signup($data);
		}
	}

	public function checkExist() {
		if (isset($_POST['email'])) {
			$client_email = $_POST['email'];
			$count = $this -> model -> checkExistEmail($client_email);
		}
		if (isset($_POST['username'])) {
			$client_username = $_POST['username'];
			$count = $this -> model -> checkExistUsername($client_username);
		}

	}

	public function VrcFl($verify = "") {
		if($verify != ""){
			$this -> model -> verify($verify);
		}
	}

}
?>