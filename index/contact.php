<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="icon" type="image/jpg" href="../images/ico.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 
	include '../includes/header.php'; //Ajout de l en tete
?>
	<div class="container">
		<div class="row">
			<h1 class="text-center">Nous contacter</h1>
			<div class="col-md-6 col-md-offset-3">
				<p class="text-justify">
					Une question ? Une remarque ?
					Vous pouvez nous la posez ici en remplissant ce formulaire où nous essayeront de vous répondre le plus tôt possible.
				</p>
				<hr>
			</div>
		</div>
		<div class="row"> <!-- Debut form -->
			<div class="col-md-8 col-md-offset-2">
				<form name="sentMessage" id="contactForm" novalidate>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Nom :</label>
							<input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Merci de mettre votre nom.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Adresse mail :</label>
							<input type="email" class="form-control" placeholder="Adresse mail" id="email" required data-validation-required-message="Merci de mettre votre mail.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Message :</label>
							<textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Merci de mettre votre message."></textarea>
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<br>
					<div id="success"></div>
					<div class="row">
						<div class="form-group col-xs-12">
							<button type="submit" class="btn btn-success btn-lg">Envoyer</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php 
	include '../includes/footer.php'; //Ajout du pied de page 
?>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="../js/jqBootstrapValidation.js"></script>
<script src="../js/contact_mail.js"></script>
</body>
</html>
