<?php
$title = "Visiter";
$pos = "visit";
?>

<?php ob_start(); ?>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-3 text-center box">
				<h3>Catégories :</h3>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="#"><b>Restaurations</b></a></li>
					<li><a href="#"><b>Hôtels et logements</b></a></li>
					<li><a href="#"><b>Divertissement</b></a></li>
					<li><a href="#"><b>Quatre</b></a></li>
					<li><a href="#"><b>L'avis des Visiteurs</b></a></li>
				</ul>
			</div>
			<div class="col-md-8 col-md-offset-1 box">
				<h2 class="text-center">Visiter</h2>
				<p>
					ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
	</div><br>
<?php
$content = ob_get_clean();
require 'template_en.php';
?>