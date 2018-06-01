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
				<img class="img-responsive att" src="public/images/logo.jpg" alt="logo" id="logo">	
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
			<li><a href="index.php?action=history&lang=<?= $lang ?>"><b>Histoire <i class="fas fa-book"></i></b></a></li>
			<li><a href="index.php?action=traveler&lang=<?= $lang ?>"><b>Voyageur <i class="fas fa-plane"></i></b></a></li>
			<li><a href="index.php?action=photoSpot&lang=<?= $lang ?>"><b>Spot photo </b><i class="fas fa-camera"></i></a></li>
			<li><a href="index.php?action=visit&lang=<?= $lang ?>"><b>Visiter </b><i class="fas fa-subway"></i></a></li>
			<li><a href="index.php?action=review&lang=<?= $lang ?>"><b>L'avis des visiteurs </b><i class="fas fa-users"></i></a></li>
			<li><a href="index.php?action=architecture&lang=<?= $lang ?>"><b>Architecture </b><i class="fas fa-chess-rook"></i></a></li>
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
							<li><img src="public/images/sponsor/unesco.png" class="img-responsive" title="UNESCO" alt="UNESCO"></li>
						</ul>
					</div>
				</div>
				<div class="row" style="margin-top: 5%">
					<div class="footer-col col-md-3">
						<a href="#logo" class="smooth-scroll" style="font-size: 32px; color: white">
							<i class="fas fa-arrow-up"></i>
							Haut de page
						</a>
					</div>
					<div class="footer-col col-md-3">
						<ul class="list-inline social">
							<li><a href="https://www.facebook.com/Ile.De.La.Cite.MCN" class="btn-social btn-outline" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li>
								<a href="https://twitter.com/iledelacite_mcn" class="btn-social btn-outline" target="_blank"><i class="fab fa-twitter"></i></a>
							</li>
							<li>
								<a href="https://www.instagram.com/iledelacite_mcn" class="btn-social btn-outline" target="_blank"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="footer-col col-md-6">
						<ul class="nav nav-pills nav-justified">
							<li><a href="index.php?action=about&lang=<?= $lang ?>"><b>A propos</b></a></li>
							<li><a href="index.php?action=contact&lang=<?= $lang ?>"><b>Contact</b></a></li>
							<li><a href="index.php?action=team&lang=<?= $lang ?>"><b>Équipe</b></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script defer src="public/js/script.js"></script>
	<?php
	if (isset($form)) {
		echo '<script defer src="public/js/jqBootstrapValidation.js"></script>';
		echo '<script defer src="public/js/contact_mail.js"></script>';
	}
	
	?>
</body>
</html>