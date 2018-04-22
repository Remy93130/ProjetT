<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="icon" type="image/jpg" href="public/images/ico.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
</head>
<body>

	<header>
		<div class="row">
			<div class="col-md-4">
				<img class="img-responsive att" src="public/images/logo.jpg" alt="logo">	
			</div>
			<div class="col-md-4 text-center">
				<h1><a href="index.php?action=index&lang=<?= $lang ?>" id="titre_lien">Île de la Cité</a></h1>
			</div>
			<div class="col-md-2">
				<a href="<?= 'index.php?action='.$pos.'&lang=fr'; ?>">
					<img class="img-responsive flag-lang" id="first-lang" src="public/images/flags/fr.jpg">
				</a>
			</div>
			<div class="col-md-2">
				<a href="<?= 'index.php?action='.$pos.'&lang=en'; ?>">
					<img class="img-responsive flag-lang" src="public/images/flags/en.jpg">
				</a>
			</div>
		</div>
	</header>
	<div class="navbar-default navbar barre_menu">
		<ul class="nav navbar-nav text-center lien_nav">
			<li class="dropdown">
				<a data-toggle="dropdown" href="#" id="hist"><b>History <i class='fas fa-caret-down'></i></b></a>
				<ul class="dropdown-menu">
					<li><a class="drop" href="index.php?action=history&lang=<?= $lang ?>"><b>L'Île de la Cité</b></a></li>
					<li><a class="drop" href="index.php?action=monument&lang=<?= $lang ?>"><b>Monuments</b></a></li>
				</ul>
			</li>
			<li><a href="index.php?action=traveler&lang=<?= $lang ?>"><b>Traveler <i class="fas fa-plane"></i></b></a></li>
			<li><a href="index.php?action=photoSpot&lang=<?= $lang ?>"><b>Photos Spots </b><i class="fas fa-camera"></i></a></li>
			<li><a href="index.php?action=visit&lang=<?= $lang ?>"><b>Visit </b><i class="fas fa-subway"></i></a></li>
			<li><a href="index.php?action=architecture&lang=<?= $lang ?>"><b>Architecture </b><i class="fab fa-fort-awesome"></i></a></li>
		</ul>
	</div>

	<?= $content ?>

	<footer class="text-center">
		<div class="footer-above">
			<div class="container">
				<div class="row">
					<div class="footer-col col-md-12" style="margin-left: 25%">
						<ul class="nav navbar-nav image-footer">
							<li><img src="public/images/sponsor/icomos.png" class="img-responsive" title="Icomos International" alt="Icomos International"></li>
							<li><img src="public/images/sponsor/upem.png" class="img-responsive" title="Université Paris Est Marne la Vallée" alt="Université Paris Est Marne la Vallée"></li>
							<li><img src="public/images/sponsor/unesco.svg" class="img-responsive" title="UNESCO" alt="UNESCO"></li>
						</ul>
					</div>
				</div><hr>
				<div class="row">
					<div class="footer-col col-md-6">
						<h2>Follow us on the web</h2><br>
						<ul class="list-inline social">
							<li><a href="www.facebook.com/Ile.De.La.Cite.MCN" class="btn-social btn-outline" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li>
								<a href="twitter.com/iledelacite_mcn" class="btn-social btn-outline" target="_blank"><i class="fab fa-twitter"></i></a>
							</li>
							<li>
								<a href="www.instagram.com/iledelacite_mcn" class="btn-social btn-outline" target="_blank"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="footer-col col-md-6">
						<h2>Usefull links</h2><br>
						<ul class="nav nav-pills nav-justified">
							<li><a href="index.php?action=about&lang=<?= $lang ?>"><b>About</b></a></li>
							<li><a href="index.php?action=contact&lang=<?= $lang ?>"><b>Contact</b></a></li>
							<li><a href="index.php?action=team&lang=<?= $lang ?>"><b>Team</b></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php
	if (isset($form)) {
		echo '<script defer src="public/js/jqBootstrapValidation.js"></script>';
		echo '<script defer src="public/js/contact_mail.js"></script>';
	}
	
	?>
</body>
</html>