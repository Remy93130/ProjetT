<?php
// Attribution des différents liens
$index = "../index/index.php";
$visite = "../visite/visite.php";
$photo = "../spotphoto/spotphoto.php";
$voyage = "../voyageur/voyageur.php";
$histoire = "../histoire/histoire.php";
$monuments = "../histoire/monuments.php";

?>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<header>
	<div class="row">
		<div class="col-md-4">
			<img class="img-responsive" src="../images/logo.jpg" alt="logo">	
		</div>
		<div class="col-md-4 text-center">
			<h1><a href="<?php echo $index ?>" id="titre_lien">Île de la Cité</a></h1>
		</div>
	</div>
</header>
<div class="navbar-default navbar barre_menu"> <!-- Debut de la barre de menu -->
	<ul class="nav navbar-nav text-center lien_nav">
		<li class="dropdown">
			<a data-toggle="dropdown" href="<?php echo $histoire ?>" id="hist"><b>Histoire</b></a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo $histoire ?>"><b>L'Île de la Cité</b></a></li>
				<li><a href="<?php echo $monuments ?>"><b>Les Monuments</b></a></li>
			</ul>
		</li>
		<li><a href="<?php echo $voyage ?>"><b>Voyageur <i class="fas fa-plane"></i></b></a></li>
		<li><a href="<?php echo $photo ?>"><b>Spot photo </b><i class="fas fa-camera"></i></a></li>
		<li><a href="<?php echo $visite ?>"><b>Visiter </b><i class="fas fa-subway"></i></a></li>
	</ul>
</div> <!-- Fin de la barre de menu -->
<!-- Gestion des liens si javascript active -->
<script type="text/javascript">
	document.getElementById('hist').innerHTML = "<b>Histoire </b><i class='fas fa-caret-down'></i></b>"
</script>
