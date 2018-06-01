<?php
$title = "About";
$pos = "about";
?>

<?php ob_start(); ?>
	<div class="container">
		<div class="row">
			<h1 class="transit">The project</h1><br>
			<div class="col-md-8 col-md-offset-2">
					We are a team of three students from the Institut Universitaire Technologique of Paris-Est Marne la Vallée University. Our role is to create a website.<br>
					With our partnership with UNESCO, our site aims to promote and promote the world heritage through cultural and digital mediation.<br>
					You will find through our site, the history of the Island of the City with its monuments, its architecture or its shops nearby.
				</p><br>
			</div>
		</div>
		<div class="row">
			<h1 class="transit">Our partners</h1><br><br>
			<div class="col-md-6 text-center">
				<img src="public/images/sponsor/upem.png" alt="UPEM">
			</div>
			<div class="col-md-6 text-justify">
				<p>
					Paris-Est University Marne la Vallée<br>
					With the supervision of the project, the teaching of the skills necessary for the design of the website and the learning of the different phases of a project.
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
					We have been able to use the content available on the Ile de la Cité as well as the photographs but 
					also have entrusted us with the task of promoting a place classified in the World Heritage
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
					Allowed us to use the historical archives kept by their organization and post them on our website.
				</p>
			</div>
		</div>
	</div>
<?php
$content = ob_get_clean();
require 'template_en.php';
?>