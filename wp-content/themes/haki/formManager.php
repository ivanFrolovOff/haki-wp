<?php
$to_email  = "";
$from_email 	= "test";
$subject = "Входящая заявка с сайта";

$name = $_POST['name'];
$phone = $_POST['phone'];

$message =
        "Имя: ".$name."\n".
        "Номер телефона: ".$phone."\n";

		$headers = 'From: '.$from_email.'' . "\r\n" .
        "Content-Type: text/plain; charset=utf-8\r\nContent-Transfer-Encoding: 8bit" .
		'Reply-To: '.$from_email.'' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();


    mail($to_email, $subject, $message, $headers);

?>

