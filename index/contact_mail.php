<?php
// Check empty fields
    if(empty($_POST['name'])||
    empty($_POST['email']) 	||
    empty($_POST['message'])||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
        echo "Il y a des champs manquant !";
        return false;
    }

    $name = strip_tags(htmlspecialchars($_POST['name']));
    $emailAddress = strip_tags(htmlspecialchars($_POST['email']));
    $message = strip_tags(htmlspecialchars($_POST['message']));

    // Create the email and send the message
    $to = 'remy93130@gmail.com'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $emailSubject = "Vous avez recu un message de :  $name";
    $emailBody = "Vous avez recu un nouveau message depuis le formulaire du site de l'Île de la Cité.\n\n"."Voici les details :\n\nNom : $name\n\nMail: $emailAddress\n\nMessage:\n$message";
    $headers = "From: noreply@idlc.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $emailAddress";	
    mail($to,$emailSubject,$emailBody,$headers);
    return true;
?>