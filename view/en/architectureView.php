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
					The Architectures tab lists all the most impressive architectures of the Ile de la Cité 
					according to four types that are Civil, Religious, Palatine and Military.<br>
					<strong>Civil :</strong> A civil architecture is a construction made for a civilian purpose. We can mention houses or hospitals.<br>
					<strong>Religious :</strong> Religious architecture is a construction with religious objectives. We can mention cathedrals or even churches.<br>
					<strong>Palatine :</strong> Palatine architecture is a large and luxurious building generally intended for a paladin, king or lord. We can mention the palaces or even the castles.<br>
					<strong>Military :</strong> A military architecture is a building that protects, it aims to adapt to situations like wars. We can mention the forts or the ramparts. are posted on our website.
				</p>
			</div>
		</div>
		<div class="row" style="margin-top: 2%">
			<h2 class="transit">Monuments</h2><br>
			<div class="table-responsive">
				<table class="table table-borderless table-responsive" style="font-size: 20px;">
					<thead style="background-color: #B94503; color: #333333;">
						<tr>
							<th>Name</th>
							<th>Date</th>
							<th>Adress</th>
							<th>Type</th>
							<th>Website</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Notre-Dame</td>
							<td>1345</td>
							<td>Quartier Notre-Dame(4e arrondissement de Paris)</td>
							<td>Religieuse</td>
							<td>
								<a href="http://www.notredamedeparis.fr/" target="_blank">Link</a>
							</td>
						</tr>
						<tr class="bordered">
							<td>Sainte-Chapelle du Palais</td>
							<td>1248</td>
							<td>8 Boulevard du Palais</td>
							<td>Palatine et Religieuse</td>
							<td>
								<a href="http://sainte-chapelle.monuments-nationaux.fr/" target="_blank">Link</a>
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
								<a href="http://www.aphp.fr/" target="_blank">Link</a>
							</td>
						</tr>
						<tr>
							<td>Palais de la Cité</td>
							<td>1201–1300</td>
							<td>2 Boulevard du Palais</td>
							<td>Palatine et militaire</td>
							<td>
								<a href="http://www.paris-conciergerie.fr/" target="_blank">Link</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row" style="margin-bottom: 1%">
			<h2 class="transit">Map of monuments</h2><br>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.google.com/maps/d/embed?mid=1ce-YjYZOilW1LfyOT3ICNPCChceSkW7B"></iframe>
			</div>
		</div>
	</div>
<?php
$content = ob_get_clean();
require 'template_en.php';
?>