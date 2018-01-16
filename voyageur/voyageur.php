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
			<div class="list-group text-center">
				<h2 class="list-group-item active">Cat 1</h2>
				<p class="list-group-item">Item</p>
				<p class="list-group-item">Item</p>
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