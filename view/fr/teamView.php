<?php $title = "L'équipe"; ?>

<?php ob_start(); ?>
	<div class="container">
		<div class="row">
			<h1 class="text-center">Présentation de l'équipe :</h1><br>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="public/images/chaton.jpg" alt="" class="img-circle img-thumbnail">
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
					<img src="public/images/chaton.jpg" alt="" class="img-circle img-thumbnail">
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
					<img src="public/images/chaton.jpg" alt="" class="img-circle img-thumbnail">
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
$content = ob_get_clean();
require 'template_fr.php';
?>