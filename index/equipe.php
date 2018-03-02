<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="icon" type="image/jpg" href="../images/ico.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
</head>
<body>
<?php 
	include '../includes/header.php'; //Ajout de l en tete
?>
	<div class="container">
		<div class="row">
			<h1 class="text-center">Présentation de l'équipe :</h1><br>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="../images/chaton.jpg" alt="" class="img-circle img-thumbnail">
					<div class="caption">
						<h4 class="text-center">Barberet Rémy</h4>
						<p>
							Chef de Projet - Responsable intégration           
						</p>
						<hr>
					</div>
					<div class="ratings">
						<p><b>Contact : </b></p>
						<p class="logo-social text-center">
							<i class="fab fa-facebook-square"></i>
							<i class="fab fa-linkedin"></i>
							<i class="fas fa-globe"></i>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="../images/chaton.jpg" alt="" class="img-circle img-thumbnail">
					<div class="caption">
						<h4 class="text-center">Chardon Léo</h4>
						<p>Chargé de communication - Responsable développement</p>
						<hr>
					</div>
					<div class="ratings">
						<p><b>Contact : </b></p>
						<p class="logo-social text-center">
							<i class="fab fa-facebook-square"></i>
							<i class="fab fa-linkedin"></i>
							<i class="fas fa-globe"></i>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="../images/chaton.jpg" alt="" class="img-circle img-thumbnail">
					<div class="caption">
						<h4 class="text-center">Ghocane Dimitri</h4>
						<p>Responsable recherche documentaire - Designer</p>
						<hr>
					</div>
					<div class="ratings">
						<p><b>Contact : </b></p>
						<p class="logo-social text-center">
							<i class="fab fa-facebook-square"></i>
							<i class="fab fa-linkedin"></i>
							<i class="fas fa-globe"></i>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
	include '../includes/footer.php'; //Ajout du pied de page 
?>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
