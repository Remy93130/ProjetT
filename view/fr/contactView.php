<?php $title = "A propos"; ?>

<?php ob_start(); ?>
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
$content = ob_get_clean();
$form = true;
require 'template_fr.php';
?>