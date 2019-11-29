<?php

if (isset($_POST['submit'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];


	require 'phpMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';

	$mail->Username='baristro.epl343@gmail.com';
	$mail->Password="epl343epl343";

	$mail->setFrom('baristro.epl343@gmail.com',"$mailFrom");
	$mail->addAddress('baristro.epl343@gmail.com');
	$mail->addReplyTo('baristro.epl343@gmail.com');


	$mail->Subject='FeedBack';
	$mail->Body="You have received a new message from $firstname $lastname.\nHere is the message:\n$message";


	if (!$mail->send()) {
		echo "Error Gmail";
		
	}else{
		echo "Thank you for your feedback!";
	}


	
}else{
	echo "Error 1";
}

?>
