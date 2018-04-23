<?php
$title = "The team";
$pos = "team";
?>

<?php ob_start(); ?>
	<div class="container">
		<div class="row">
			<h1 class="text-center">Team presentation :</h1><br>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<br>
					<img src="public/images/team/remy.jpg" alt="" class="img-circle img-thumbnail">
					<div class="caption">
						<h4 class="text-center">Barberet Rémy</h4>
						<p>
							Project manager - Responsible development
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
						<p>Communication manager - Responsible documentary research</p>
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
							Responsible translation - Designer
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
			<h1 class="text-center">Contributors :</h1>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 cool-box">
				<h3>ETTAYEB Tewfik :</h3>
				<p class="indent">
					Responsible of Forum UNESCO - UPEM
				</p>
				<h3>CESSY David :</h3>
				<p class="indent">
					Technical choices, help to website development
				</p>
				<h3>MATHIEU Georges :</h3>
				<p class="indent">
					Introduction to project management
				</p>
				<h3>CARDINET Emeline :</h3>
				<p class="indent">
					Graphical charter
				</p>
			</div>
		</div>
	</div><br>
<?php
$content = ob_get_clean();
require 'template_en.php';
?>