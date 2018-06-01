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
					<h1 class="text-center">Visit</h1>
					<p class="text-justify">
						Here you can find all good shops around the Île de la Cité, it can be restaurants, hotel or places to have fun, they are main informations
						about them and a itinerary to get there (with Google Maps) 
					</p>
				</div>
				<div class="col-md-4 text-center">
					<h3 class="link">Catégories :</h3>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang?>"><b>Tout voir</b></a></li>
						<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice=restaurant' ?>"><b>Restoration</b></a></li>
						<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice=hotel' ?>"><b>Hôtels and housing</b></a></li>
						<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice=entertainment' ?>"><b>Entertainment</b></a></li>
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
								Name
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
								Price 
								<a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice='.$choice.'&sort=price' ?>" style="color: #303030">
									<i class="fas fa-sort pull-right"></i>
								</a>
							</th>
							<th>
								Website
							</th>
							<th>
								Itinerary
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
									echo '<a href="' . $data['4'] . '" target="_blank">Link</a>';
								} else {
									echo "Not specified";
								}?>
								
							</td>
							<td>
								<?= '<a href="'.$data['5'].'" target="_blank">Link</a>' ?>
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