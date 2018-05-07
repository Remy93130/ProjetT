<?php
$title = "Architectures";
$pos = "architecture";
?>

<?php ob_start(); ?>
	<div class="container">
		<div class="row">
			<h1 class="text-center">Architecture</h1>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
		<div class="row">
			<h2 class="transit">Monuments</h2><br>
			<div class="table-responsive">
				<table class="table table-borderless table-responsive" style="font-size: 20px;">
					<thead style="background-color: #B94503; color: #333333;">
						<tr>
							<th>Nom</th>
							<th>Date</th>
							<th>Adresse</th>
							<th>Type</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Exemple</td>
							<td>1997</td>
							<td>55 rue Imaginaire</td>
							<td>Palatine</td>
						</tr>
						<tr class="bordered">
							<td>Second</td>
							<td>1998</td>
							<td>12 rue Random</td>
							<td>Militaire</td>
						</tr>
						<tr>
							<td>Exemple</td>
							<td>1997</td>
							<td>55 rue Imaginaire</td>
							<td>Palatine</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<h2 class="transit">Carte des monuments</h2><br>
			<h4 class="text-center" style="padding: 25%;">Intégrer une map pour montrer les monuments</h4>
		</div>
	</div>
<?php
$content = ob_get_clean();
require 'template_fr.php';
?>