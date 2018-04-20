<?php $title = "Accueil"; ?>

<?php ob_start(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center">Bienvenue sur le site de l'Ile de la Cité</h3>
				<p class="text-justify">
					Voici notre site consacré au patrimoine mondial de l'Ile de la Cité, mandaté par l'UNESCO.
					Vous trouverez sur ce site toute les informations essentielles sur l'Ile de la Cité.
					tel que son histoire, son actualité ou encore ses meilleures spot photographiques 
					pour prendre les meilleurs photos de l'Ile lors de votre voyage. Si vous avez des questions
					n'hésité pas à utiliser le support contact.
				</p>
			</div>
		</div>
		<div class="row">
			<div id="carousel" class="carousel slide" data-ride="carousel"> <!-- Debut carousel -->
				<!-- Indicateur -->
				<ol class="carousel-indicators">
					<li data-targer="#carousel" data-slide-to="0" class="active"></li>
					<li data-targer="#carousel" data-slide-to="1"></li>
					<li data-targer="#carousel" data-slide-to="2"></li>
				</ol>
				<!-- Images -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="public/images/carousel1.jpg" alt="Image1" style="width: 100%;">
						<div class="carousel-caption">
							<h2 class="caption-C">La pointe Est de l'Ile</h2>
						</div>
					</div>
					<div class="item">
						<img src="public/images/carousel2.jpg" alt="Image2" style="width: 100%;">
						<div class="carousel-caption">
							<h2 class="caption-C">Palais de Justice</h2>
						</div>
					</div>
					<div class="item">
						<img src="public/images/carousel3.jpg" alt="Image3" style="width: 100%;">
						<div class="carousel-caption">
							<h2 class="caption-C">Statue de Charlemagne et ses Leudes</h2>
						</div>
					</div>
				</div>

				<!-- Controle -->
				<a class="left carousel-control" href="#carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Precedent</span>
				</a>
				<a class="right carousel-control" href="#carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Suivant</span>
				</a>
			</div> <!-- Fin carousel -->
		</div>
		<br> <br>
		<div class="row">
			<div class="col-md-4">
				<a class="twitter-timeline" data-theme="dark" data-height="525" data-link-color="#f7af3e" href="https://twitter.com/iledelacite_mcn?ref_src=twsrc%5Etfw">
				<p>Pour suivre toute l'actualité de l'Île de la Cité, nous vous invitons à activer votre JavaScript pour voir le fil d'actualité ou suivre ce lien.</p>
			</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
			<div class="col-md-8">
				<a href="public/images/plan.svg"><img class="img-responsive plan" src="public/images/plan.svg" alt="Plan"></a>
			</div>
		</div>
	</div>
<?php 
$content = ob_get_clean(); 
require 'template_fr.php';
?>