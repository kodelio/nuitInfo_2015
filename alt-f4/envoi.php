<?php
$mail = $_POST['destinataire']; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // Différents passsages de lignes si hotmail,live ou msn (sinon bug)
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//Définition du contenu HTML et Texte
$message_html = $contenu;
$message_txt = "Bonjour, pour visualiser ce mail veuillez utiliser un logiciel supportant le HTML";
//==========
 
//==BOUNDARY==
$boundary = "-----=".md5(rand());
//============
 
//==SUJET==
$sujet = $_POST['sujet'];
//=========
 
//==HEADER==
$header = "From: $nom_expediteur <$mail_expediteur>".$passage_ligne;
$header.= "Reply-to: $nom_expediteur <$mail_expediteur>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====MESSAGE TEXTE
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====MESSAGE HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========

//=====Envoi de l'e-mail et vérification.
if(mail($mail,$sujet,$message,$header))
{
	echo "Le mail à bien été envoyé !";
}
else echo "erreur : ".$mail;
//==========
?>