<?php
	if(empty($_POST['name'])||
	empty($_POST['email'])  ||
	empty($_POST['message'])||
	!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	{
		echo "Il y a des champs manquant !";
		return false;
	}

	$name = strip_tags(htmlspecialchars($_POST['name']));
	$emailAddress = strip_tags(htmlspecialchars($_POST['email']));
	$message = strip_tags(htmlspecialchars($_POST['message']));

	$to = 'remy93130@gmail.com';
	$emailSubject = "Vous avez recu un message de :  $name";
	$emailBody = "Vous avez recu un nouveau message depuis le formulaire du Portfolio.\n\n"."Voici les details :\n\nNom : $name\n\nMail: $emailAddress\n\nMessage:\n$message";
	$headers = "From: noreply@portfolio.com\n";
	$headers .= "Reply-To: $emailAddress";
	mail($to,$emailSubject,$emailBody,$headers);
	return true;
?>