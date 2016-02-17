<?php

if(isset($_POST) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])){
	if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message'])){
		$to =  $_POST['ONG'];
		$subject = "Contact par mail via l'application Alt-F4";
		$message = "Envoi pour : ".$_POST['ONG']."\n\nNom : ".$_POST['nom']."\n\nAdresse email : ".$_POST['email']."\n\nMessage :\n ".$_POST['message']."\n";
		$message = wordwrap($message, 70);
		$headers = 'From: '.$_POST['email']."\n".
		'Reply-To: '.$_POST['email']."\n".
		'X-Mailer: PHP/'.phpversion();

		if (mail($to, $subject, $message, $headers)){
			header("Location: ../mail_envoye.php");
		} 
		else {
			header("Location: ../mail_erreur.php");
		}
	}
}

?>