<?php

require 'connexionDb.php';

$sqlReview = 'SELECT * FROM review';
$reqReview = $db->query($sqlReview);

$sqlShops = 'SELECT * FROM shops ORDER BY type ASC';
$reqShops = $db->query($sqlShops);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
</head>
<body>
	<div class="container-fluid">
		<h1 class="text-center">Espace administration</h1>
		<a href="../index.php" class="pull-right">Retour au site</a><br><hr>
		<div class="row" style="margin-top: 5%">
			<div class="col-md-6 cool-box table-responsive">
				<h2 class="text-center">Gestion des shops</h2>
				<a class="pull-right" href="alterShop?action=add">Ajouter un magasin</a>
				<table class="table">
					<thead>
						<tr>
							<th>Nom</th>
							<th>Type</th>
							<th>Prix</th>
							<th>Site</th>
							<th>Itinéraire</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody style="color: white">
						<?php while ($data = $reqShops->fetch()) { ?>
							<tr>
								<td><?= $data['1'] ?></td>
								<td><?= $data['2'] ?></td>
								<td><?= $data['3'] ?></td>
								<td><?= $data['4'] ?></td>
								<td><?= $data['5'] ?></td>
								<td>
									<a href="alterShop.php?action=delete&target=<?= $data['0'] ?>">Supprimer</a>
									<a href="alterShop.php?action=update&target=<?= $data['0'] ?>">Modifier</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-6 cool-box">
				<h2 class="text-center">Gestion des avis visiteurs</h2>
				<table class="table">
					<thead>
						<tr>
							<th>Auteur</th>
							<th>Message</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody style="color: white">
						<?php while ($data = $reqReview->fetch()) { ?>
							<tr>
								<td><?= $data['1'] ?></td>
								<td><?= $data['2'] ?></td>
								<td><?= $data['3'] ?></td>
								<td><a href="deleteReview.php?target=<?= $data['0'] ?>">Supprimer</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>