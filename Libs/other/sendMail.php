<?php
class sendMail{
	# PARAMETER
	#$template=direct file path mail template;
	#$to=mail adress;
	#$from=mail adress;
	#$subject= subject of mail ;	
	#$data=array('item1'=>'item1','item2'=>'item2',.....);
	function mailDefault($template,$to,$data){
			$arrayMail=array();
			
			$file=file($template);
			//Get values from template mail
			foreach($file as $value){
				if($value!=""){
					list($key, $val) = explode("=>", $value);
					$key = trim($key);
					$val = trim($val);
					$arrayMail[$key]=$val;
				}
			}
			$subject=$arrayMail['subject'];
			$from=$arrayMail['from'];
			$body=$arrayMail['body'];
			$body=str_replace('\r\n',"\n",$body);
//			$headers .= "MIME-Version: 1.0\r\n";
//			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//			$headers  .= "From: $from\r\n"; 
			//push value from in parameter to body mail
			foreach($data as $key => $item){
				$body=str_replace('{$'.$key.'}',$item,$body);
			}
		//Execute send mail
		mb_language("Japanese");
		mb_internal_encoding("UTF-8");
		
		if (mb_send_mail($to, $subject, $body, "From: ".$from)) {
			return true;
		} else {
			return false;
		}
	}
	
	public function sendMailSMTP($template,$to,$data){
		
		require 'PHPMailer/class.phpmailer.php';
		
		$file=file($template);
		//Get values from template mail
		foreach($file as $value){
			if($value!=""){
				list($key, $val) = explode("=>", $value);
				$key = trim($key);
				$val = trim($val);
				$$key=$val;
			}
		}
		$body=str_replace('\r\n','<br/>',$body);
		try {
			$mail = new PHPMailer(true); //New instance, with exceptions enabled
		
		
			$mail->IsSMTP();                           // tell the class to use SMTP
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->Port       = 25;                    // set the SMTP server port
			$mail->Host       = "mail.gmail.com"; // SMTP server
			$mail->Username   = $from;     // SMTP server username
			$mail->Password   = "";            // SMTP server password
		
			$mail->IsSendmail();  // tell the class to use Sendmail
		
			$mail->AddReplyTo($from,"Brights consulting");
		
			$mail->From       = $from;
			$mail->FromName   = "Brights consulting";
		
			 
		
			$mail->AddAddress($to);
		
			$mail->Subject  = $subject;
		
			$mail->AltBody    = $body; // optional, comment out and test
			$mail->WordWrap   = 80; // set word wrap
		
			$mail->MsgHTML($body);
		
			$mail->IsHTML(true); // send as HTML
		
			if($mail->Send()){
				return true;
			}
		} catch (phpmailerException $e) {
			$e->errorMessage();
		}	
		
	}

}
?>