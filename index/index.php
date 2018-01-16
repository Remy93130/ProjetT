 	<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="icon" type="image/jpg" href="../images/ico.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
	include '../includes/header.php'; //Ajout de l en tete
?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center">Bienvenue sur le site de l'Ile de la Cité</h3>
				<p class="text-justify">
					Voici le site du patrimoine mondial de l'Ile de la Cité, mandaté par l'UNESCO.
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
						<img src="../images/carousel1.jpg" alt="Image1" style="width: 100%;">
						<div class="carousel-caption">
							<h2 class="caption-C">Vue sur Notre-Dame</h2>
						</div>
					</div>
					<div class="item">
						<img src="../images/carousel2.jpg" alt="Image2" style="width: 100%;">
						<div class="carousel-caption">
							<h2 class="caption-C">Palais de Justice</h2>
						</div>
					</div>
					<div class="item">
						<img src="../images/carousel3.jpg" alt="Image3" style="width: 100%;">
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
				<a class="twitter-timeline" data-height="525" data-theme="dark" href="https://twitter.com/Mairiedu4e?ref_src=twsrc%5Etfw">Tweets by Mairiedu4e</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
			</div>
			<div class="col-md-8">
				<a href="../images/plan.svg"><img class="img-responsive plan" src="../images/plan.svg" alt="Plan"></a>
			</div>
		</div>
		<br>
	</div>
<?php 
	include '../includes/footer.php'; //Ajout du pied de page 
?>

</body>
</html>
