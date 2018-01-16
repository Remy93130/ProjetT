<!DOCTYPE html>
<html>
<head>
	<title>Voyageur</title>
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
			<h1 class="text-center">Anecdotes sur L'Île de la Cité</h1>
		</div>
		<div class="row">
			<div class="list-group">
				<h2 class="list-group-item active text-center">Stigmates de la seconde guerre mondiale</h2>
				<div class="list-group-item">
						<table>
							<tr>
								<th>
									<img src="../images/voyageur1.jpg" class="table-col2">
								</th>
								<th>
									<p class="text-justify table-col2">
										Si Paris a été sauvé de la destruction, elle n'en a pas moins été bombardé et en porte encore les cicatrices à de très nombreux endroits dans la capitale.
										En effet, au niveau de la rue d'Arcole, le haut mur de l'Hôtel Dieu porte encore la trace de deux tirs d'obus d'un char Allemand lors de la libération de Paris en Août 1944.	
									</p>
								</th>
							</tr>
						</table>
				</div>
			</div>
			<br>
			<div class="list-group text-center">
				<h2 class="list-group-item active">Cat 2</h2>
				<p class="list-group-item">Item</p>
				<p class="list-group-item">Item</p>
			</div>
		</div>
	</div>
<?php
	include '../includes/footer.php'; //Ajout du pied de page
?>
</body>
</html>