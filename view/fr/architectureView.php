<?php
$title = "Architectures";
$pos = "architecture";
?>

<?php ob_start(); ?>
	<div class="container">
		<div class="row">
			<h1 class="text-center" style="font-size: 50px">Architecture</h1>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<p class="text-justify">
					L'onglet Architectures recense toute les architectures les plus impressionantes
					de l'Ile de la Cité selon quatre types qui sont Civile, Religieuse, Palatine et Militaire.<br>
					<strong>Civile :</strong> Une architecture civile est une construction faite pour un but civil. On on peut citer
					les maisons ou les hopitaux.<br>
					<strong>Religieuse :</strong> Une architecture religieuse est une construction à objectifs religieux. On peut citer les cathédrales ou encore les églises.<br>
					<strong>Palatine :</strong> Une architecture palatine est une grande et luxueuse construction généralement destiné à un paladin, roi ou seigneur. On peut citer les palais ou encore les chateaux.<br>
					<strong>Militaire :</strong> Une architecture militaire est une construction qui protège, elle a pour but 
					de s'adapter à des situations comme les guerres. On peut citer les forts ou encore les remparts.
				</p>
			</div>
		</div>
		<div class="row" style="margin-top: 2%">
			<h2 class="transit">Monuments</h2><br>
			<div class="table-responsive">
				<table class="table table-borderless table-responsive" style="font-size: 20px;">
					<thead style="background-color: #B94503; color: #333333;">
						<tr>
							<th>Nom</th>
							<th>Date</th>
							<th>Adresse</th>
							<th>Type</th>
							<th>Site internet</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Notre-Dame</td>
							<td>1345</td>
							<td>Quartier Notre-Dame(4e arrondissement de Paris)</td>
							<td>Religieuse</td>
							<td>
								<a href="http://www.notredamedeparis.fr/" target="_blank">Lien</a>
							</td>
						</tr>
						<tr class="bordered">
							<td>Sainte-Chapelle du Palais</td>
							<td>1248</td>
							<td>8 Boulevard du Palais</td>
							<td>Palatine et Religieuse</td>
							<td>
								<a href="http://sainte-chapelle.monuments-nationaux.fr/" target="_blank">Lien</a>
							</td>
						</tr>
						<tr>
							<td>Enceinte Gallo-Romaine de la Cité</td>
							<td>Inconnu</td>
							<td>6 Rue de la colombe</td>
							<td>Militaire</td>
							<td></td>
						</tr>
						<tr class="bordered">
							<td>Hôtel-Dieu de Paris</td>
							<td>651</td>
							<td>1 parvis Notre-Dame - place Jean-Paul-II</td>
							<td>Civile et religieuse</td>
							<td>
								<a href="http://www.aphp.fr/" target="_blank">Lien</a>
							</td>
						</tr>
						<tr>
							<td>Palais de la Cité</td>
							<td>1201–1300</td>
							<td>2 Boulevard du Palais</td>
							<td>Palatine et militaire</td>
							<td>
								<a href="http://www.paris-conciergerie.fr/" target="_blank">Lien</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row" style="margin-bottom: 1%">
			<h2 class="transit">Carte des monuments</h2><br>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.google.com/maps/d/embed?mid=1ce-YjYZOilW1LfyOT3ICNPCChceSkW7B"></iframe>
			</div>
		</div>
	</div>
<?php
$content = ob_get_clean();
require 'template_fr.php';
?>