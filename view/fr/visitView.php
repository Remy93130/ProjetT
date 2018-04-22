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
					<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang?>"><b>Tout voir</b></a></li>
					<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice=restaurant' ?>"><b>Restaurations</b></a></li>
					<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice=hotel' ?>"><b>Hôtels et logements</b></a></li>
					<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice=entertainment' ?>"><b>Divertissement</b></a></li>
					<li>&nbsp;</li>
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
		</div><br><br>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
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
									echo '<a href="' . $data['4'] . '">Lien</a>';
								} else {
									echo "Non renseigné";
								}?>
								
							</td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div><br>
<?php
$content = ob_get_clean();
require 'template_fr.php';
?>