<?php
$title = "Visit";
$pos = "visit";
?>

<?php ob_start(); ?>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 box">
				<div class="col-md-6 col-md-offset-1">
					<h1 class="text-center">Visiter</h1>
					<p class="text-justify">
						Ici, vous pourrez trouvez tout les commerces intéressant aux alentours de l'Île de la Cité, que ce soit des lieux pour ce restaurer,
						dormir ou s'amuser, vous avez accès aux principales information de ceux-ci mais également la possibilité d'obtenir un itinéraire pour
						vous y rendre (via google maps).
					</p>
				</div>
				<div class="col-md-4 text-center">
					<h3 class="link">Catégories :</h3>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang?>"><b>Tout voir</b></a></li>
						<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice=restaurant' ?>"><b>Restaurations</b></a></li>
						<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice=hotel' ?>"><b>Hôtels et logements</b></a></li>
						<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice=entertainment' ?>"><b>Divertissement</b></a></li>
					</ul>
				</div>
			</div>
			
		</div>
		<div class="row" style="margin-top: 2%">
			
		</div><br><br>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 table-responsive">
				<table class="table table-bordered" style="font-size: 20px;">
					<thead style="background-color: #B94503; color: #333333;">
						<tr>
							<th>
								Nom
								<a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice='.$choice.'&sort=name' ?>" style="color: #303030">
									<i class="fas fa-sort pull-right"></i>
								</a>
							</th>
							<th>
								Type 
								<a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice='.$choice.'&sort=type' ?>" style="color: #303030">
									<i class="fas fa-sort pull-right"></i>
								</a>
							</th>
							<th>
								Prix 
								<a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice='.$choice.'&sort=price' ?>" style="color: #303030">
									<i class="fas fa-sort pull-right"></i>
								</a>
							</th>
							<th>
								Site
							</th>
							<th>
								Itinéraire
							</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$count = 0;
						while ($data = $shops->fetch()) {						
						$border = ($count % 2 == 0) ? 0 : 1 ;
						if ($border) {
							echo "<tr class='bordered'>";
						} else {
							echo "<tr>";
						}
						$count++;
						?>
							<td><?= $data['1'] ?></td>
							<td><?= $data['2'] ?></td>
							<td class="text-center">
								<?php
								for ($i=0; $i < $data['3']; $i++) { 
									echo "€";
								}
								?>
							</td>
							<td>
								<?php if (!empty($data['4'])) {
									echo '<a href="' . $data['4'] . '" target="_blank">Lien</a>';
								} else {
									echo "Non renseigné";
								}?>
								
							</td>
							<td>
								<?= '<a href="'.$data['5'].'" target="_blank">Lien</a>' ?>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>				
			</div>
		</div>
	</div><br>

<?php
$content = ob_get_clean();
require 'template_en.php';
?>