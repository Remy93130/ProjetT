<?php
$title = "A propos";
$pos = "about";
?>

<?php ob_start(); ?>
	<div class="container">
		<div class="row">
			<h1 class="transit">Le projet</h1><br>
			<div class="col-md-8 col-md-offset-2">
				<p class="text-justify">
					Nous somme une équipe de trois étudiants de l'Institut Universitaire Technologique
					de l'Université Paris-Est Marne la Vallée. Nous avons pour rôle de réaliser un site internet.<br>
					Avec notre partenariat avec l'UNESCO, notre site a pour but de valoriser et promouvoir le patrimoine mondiale à travers une médiation culturelle et numérique.<br>
					Vous pourrez donc trouvez à travers notre site, l'histoire de l'Île de la Cité avec ses monuments, son architecture ou encore ses commerces aux alentours.
				</p><br>
			</div>
		</div>
		<div class="row">
			<h1 class="transit">Nos partenaires</h1><br><br>
			<div class="col-md-6 text-center">
				<img src="public/images/sponsor/upem.png" alt="UPEM">
			</div>
			<div class="col-md-6 text-justify">
				<p>
					L'Université Paris-Est Marne la Vallée<br>
					Avec l'encadrement du projet, l'enseignement des compétences nécessaire pour la conception du site internet et l'apprentissage des différentes phases d'un projet
				</p>
			</div>
		</div>
		<br><hr><br>
		<div class="row">
			<div class="col-md-6 text-center">
				<img src="public/images/sponsor/unesco.svg" alt="UNESCO" style="width: 50%">
			</div>
			<div class="col-md-6 text-justify">
				<p>
					L'UNESCO<br>
					Nous a permis d'utiliser le contenu disponible sur l'Île de la Cité ainsi que les photographies mais également nous avoir confié la charge de promouvoir un lieu classé dans le patrimoine mondial.
				</p>
			</div>
		</div>
		<br><hr><br>
		<div class="row">
			<div class="col-md-6 text-center">
				<img src="public/images/sponsor/icomos.png" alt="ICOMOS" style="width: 75%">
			</div>
			<div class="col-md-6 text-justify">
				<p>
					ICOMOS<br>
					Nous a permis d'utiliser les archives historiques conservées par leur organisation et de les afficher sur notre site internet.
				</p>
			</div>
		</div>
	</div>
<?php
$content = ob_get_clean();
require 'template_fr.php';
?>