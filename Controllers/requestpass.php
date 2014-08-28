<?php
/**
 *
 */
class requestpass extends Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this -> view -> script = array(URL . 'Views/requestpass/js/default.js');
		$this -> view -> render('requestpass/index');
	}

	public function checkEmailExistPassRequest() {
		if (isset($_POST['re_email'])) {
			$client_email = $_POST['re_email'];
			$this -> model -> checkEmailExistPassRequest($client_email);
		}
	}

	public function sendRequestPassword() {
		if (isset($_POST['email_address'])) {
			if ($_POST['email_address'] != "") {
				$data['new_pass'] = bin2hex(openssl_random_pseudo_bytes(3));
				$data['client_email'] = $_POST['email_address'];
				//Nội dung email
				$body = '<h1>WAHANDA Thông Báo</h1>';
				$body .= '<p>Bạn đã yêu cầu đổi password trên http:'.URL.'</p>';
				$body .= '<p>Mật khẩu đăng nhập mới trên WAHANDA của bạn là: <h3><strong><i>' . $data['new_pass'] . '</i></strong></h3></p>';
				$body .= '<p>Hãy đăng nhập lại và đổi password của bạn nhé ( ^.^!) </p>';
				$body .= '<p>Chúc một bạn ngày mới tốt lành</p>';
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
				$mail -> Subject = "Xác nhận yêu cầu đổi password từ Wahanda!";
				$mail -> Body = $body;
				$mail -> AddAddress($data['client_email']);
				if (!$mail -> Send()) {
					echo "Mailer Error: " . $mail -> ErrorInfo;
				} else {
					$this -> model -> sendRequestPassword($data);
				}
			}
		}
	}

}
?>