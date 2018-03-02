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
			<h1 class="text-center">Architecture</h1>
		</div>
		<div class="row">
			<p class="text-justify">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
		<hr>
		<div class="row">
			<h2>Monuments</h2><br>
			<table class="table table-bordered">
				<thead class="">
					<tr class="text-center">
						<th>Nom</th>
						<th>Date</th>
						<th>Adresse</th>
						<th>Type</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Exemple</td>
						<td>1997</td>
						<td>55 rue Imaginaire</td>
						<td>Palatine</td>
					</tr>
				</tbody>
			</table>
		</div>
		<hr>
		<div class="row">
			<h2>Carte des monuments</h2><br>
			<h4 class="text-center" style="padding: 25%;">Intégrer une map pour montrer les monuments</h4>
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
