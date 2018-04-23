<?php
$title = "L'équipe";
$pos = "team";
?>

<?php ob_start(); ?>
	<div class="container">
		<div class="row">
			<h1 class="text-center">Présentation de l'équipe :</h1><br>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<br>
					<img src="public/images/team/remy.jpg" alt="" class="img-circle img-thumbnail">
					<div class="caption">
						<h4 class="text-center">Barberet Rémy</h4>
						<p>
							Chef de Projet - Responsable développement
						</p>&nbsp;
						<hr>
					</div>
					<div class="ratings">
						<p><b>&nbsp;Contact : </b></p>
						<p class="logo-social text-center">
							<a href="https://www.linkedin.com/in/rémy-barberet" target="_blank"><i class="fab fa-linkedin"></i></a>
							<a href="http://perso-etudiant.u-pem.fr/~rbarbere/" target="_blank"><i class="fas fa-globe"></i></a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<br>
					<img src="public/images/team/leo.jpg" alt="" class="img-circle img-thumbnail">
					<div class="caption">
						<h4 class="text-center">Chardon Léo</h4>
						<p>Chargé de communication - Responsable recherche documentaire</p>
						<hr>
					</div>
					<div class="ratings">
						<p><b>&nbsp;Contact : </b></p>
						<p class="logo-social text-center">
							<a href="https://www.linkedin.com/in/l%C3%A9o-chardon-950319155/" target="_blank"><i class="fab fa-linkedin"></i></a>
							<a href="http://perso-etudiant.u-pem.fr/~lchard02/" target="_blank"><i class="fas fa-globe"></i></a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<br>
					<img src="public/images/team/dimitri.jpg" alt="" class="img-circle img-thumbnail">
					<div class="caption">
						<h4 class="text-center">Ghocane Dimitri</h4>
						<p>
							Responsable traduction - Designer
						</p>&nbsp;
						<hr>
					</div>
					<div class="ratings">
						<p><b>&nbsp;Contact : </b></p>
						<p class="logo-social text-center">
							<a href="https://www.linkedin.com/in/dimitri-ghocane-413319155/" target="_blank"><i class="fab fa-linkedin"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<h1 class="text-center">Intervenants :</h1>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 cool-box">
				<h3>ETTAYEB Tewfik :</h3>
				<p class="indent">
					Responsable du Forum UNESCO - UPEM
				</p>
				<h3>CESSY David :</h3>
				<p class="indent">
					Choix techniques, aide au développement du site.
				</p>
				<h3>MATHIEU Georges :</h3>
				<p class="indent">
					Initiation à la gestion de projet.
				</p>
				<h3>CARDINET Emeline :</h3>
				<p class="indent">
					Charte graphique
				</p>
			</div>
		</div>
	</div><br>
<?php
$content = ob_get_clean();
require 'template_fr.php';
?>