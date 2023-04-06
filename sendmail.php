<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require	'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';


	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->isHTML(true);
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.nic.ru';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@prospectschool.ru';                     //SMTP username
    $mail->Password   = 'NiProsp03!23';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	$error = true;
	$secret = '6LcxK0MlAAAAAO0FdMI7pKjfca8L8i-atAbXjEQq';
	
	if (!empty($_POST['g-recaptcha-response'])) {
		$curl = curl_init('https://www.google.com/recaptcha/api/siteverify');
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, 'secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
		$out = curl_exec($curl);
		curl_close($curl);
		
		$out = json_decode($out);
		if ($out->success == true) {
			$error = false;
		} 
	}    
	
	if ($error) {
		echo 'Ошибка заполнения капчи.';
	}

	// От кого письмо
	$mail->setFrom('info@prospectschool.ru');
	// Кому отправить
	$mail->addAddress('dpavlov@niime.ru');
	$mail->addAddress('ekozikova@niime.ru');
	$mail->addAddress('eglebova@niime.ru');
	$mail->addAddress('nzabodaeva@niime.ru');
	// Тема письма
	$mail->Subject = 'ЦОК "НИИМЭ"';

	// Тело письма
	$body = '<h1>Письмо с сайта ЦОК "НИИМЭ"!</h1>';

	if(trim(!empty($_POST['name']))){
		$body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
	}
	if(trim(!empty($_POST['email']))){
		$body.='<p><strong>Email:</strong> '.$_POST['email'].'</p>';
	}
	if(trim(!empty($_POST['message']))){
		$body.='<p><strong>Message:</strong> '.$_POST['message'].'</p>';
	}

	$mail->Body = $body;

	if(!$mail->send()) {
		$message = 'Ошибка';
	} else {
		$message = 'Данные отправлены!';
	} 
	$response = ['message' => $message];
		
	header('Content-type: application/json');
	echo json_encode($response);
?>