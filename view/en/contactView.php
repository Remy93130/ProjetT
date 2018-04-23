<?php
$title = "Contact";
$pos = "contact";
?>

<?php ob_start(); ?>
	<div class="container">
		<div class="row">
			<h1 class="text-center">Contact us</h1>
			<div class="col-md-6 col-md-offset-3">
				<p class="text-justify">
					A question, an observation ?
					You can ask us here in filling the form where we trying to answer you as soon as possible
				</p>
				<hr>
			</div>
		</div>
		<div class="row"> <!-- Debut form -->
			<div class="col-md-8 col-md-offset-2">
				<form name="sentMessage" id="contactForm" novalidate>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Name :</label>
							<input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please put your name.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Email address :</label>
							<input type="email" class="form-control" placeholder="Email address" id="email" required data-validation-required-message="Please put your email address.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Message :</label>
							<textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please put your message"></textarea>
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<br>
					<div id="success"></div>
					<div class="row">
						<div class="form-group col-xs-12">
							<button type="submit" class="btn btn-success btn-lg">Send</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
$content = ob_get_clean();
$form = true;
require 'template_en.php';
?>