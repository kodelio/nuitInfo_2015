<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$contenu = $_POST['message'];
$ONG =  $_POST['ONG']; 
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $ONG)) // Différents passsages de lignes si hotmail,live ou msn (sinon bug)
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//Définition du contenu HTML et Texte
$message_txt = "NOUVEAU CONTACT--> Nom :".$nom."  Prenom: ".$prenom."  Email: ".$email." Message : ".$contenu;
include('./traitement_contenu.php');
$message_html = $contenu;
//==========

//==BOUNDARY==
$boundary = "-----=".md5(rand());
//============

//==SUJET==
$sujet = "Contact ".$nom." ".$prenom;
//=========

//==HEADER==
$header = "From: Site web <reply@test.fr>".$passage_ligne;
$header.= "Reply-to: Site web <reply@test.fr>".$passage_ligne;
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
if(mail($ONG,$sujet,$message,$header))
{
	$redir = "../mail_envoye";
	header("Location: ".$redir.".php");
}
else echo "Erreur : ".$mail;
//==========
?>