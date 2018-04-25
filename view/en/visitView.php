<?php
$title = "Visiter";
$pos = "visit";
?>

<?php ob_start(); ?>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-md-offset-1 text-center box">
				<h3 class="link">Catégories :</h3>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang?>"><b>Tout voir</b></a></li>
					<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice=restaurant' ?>"><b>Restaurations</b></a></li>
					<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice=hotel' ?>"><b>Hôtels et logements</b></a></li>
					<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice=entertainment' ?>"><b>Divertissement</b></a></li>
					<li>&nbsp;</li>
					<li><a href="<?= 'index.php?action='.$pos.'&lang='.$lang.'&choice=review' ?>"><b>L'avis des Visiteurs</b></a></li>
				</ul>
			</div>
			<div class="col-md-6 col-md-offset-1 box">
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
			<div class="col-md-10 col-md-offset-1 table-responsive">
				<?php if (empty($_GET['choice']) || $_GET['choice'] != "review") { ?>
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
				<?php } else { ?>
				<h2 class="transit">Avis des visiteurs :</h2>
				<div class="cool-box"><br>
					<?php while ($data = $shops->fetch()) { ?>
						<h4>
							&nbsp;Auteur : <?= $data['1'] ?>
							<i class="pull-right">Le <?= $data['3'] ?>&nbsp;</i>
						</h4>
						<h4>&nbsp;Message :</h4>
						<p class="indent text-justify" style="padding: 10px"><?= htmlspecialchars($data['2']) ?></p><br>
						<hr>
					<?php } ?>
					<a style="color: #F7AF3E; font-size: 18px;" href="#" data-toggle="modal" data-target="#setReview">&nbsp;Donner votre avis</a>
				</div>
				<?php } ?>
				
			</div>
		</div>
	</div><br>

	<div class="modal fade" id="setReview" role="dialog">
		<div class="modal-dialog">
			<div class="histoire modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="color: red"><i class="fas fa-times"></i></button>
					<h2 class="modal-title text-center">Donner votre avis</h2>
				</div>
				<div class="modal-body">
					<form method="post" action="index.php?action=addReview">
						<label for="name">Votre nom :</label>
						<input class="form-control" type="text" name="name"><br>
						<label for="review">Votre message :</label>
						<textarea class="form-control" name="review" rows="4"></textarea><br>
						<button type="submit" class="btn btn-default">Envoyez</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>

<?php
$content = ob_get_clean();
require 'template_en.php';
?>