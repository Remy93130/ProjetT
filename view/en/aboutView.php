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
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
	</div>
<?php
$content = ob_get_clean();
require 'template_en.php';
?>