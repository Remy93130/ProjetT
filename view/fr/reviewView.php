<?php 
$title = "Votre avis";
$pos = "review";
?>

<?php ob_start(); ?>
	<div class="container">
		<div class="row">
			<h1 class="text-center">
				Votre avis
			</h1>
			<p class="text-center">
				Ici, vous avez la possibilité de déposer un avis et de lire ceux des autres visiteurs, Qu'attendez-vous ? Allez-y !
			</p>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Poster un avis</h2>
				<form method="post" action="index.php?action=addReview">
					<label for="name">Votre nom :</label>
					<input class="form-control" type="text" name="name"><br>
					<label for="review">Votre message :</label>
					<textarea class="form-control" name="review" rows="4"></textarea><br>
					<button type="submit" class="btn btn-default">Envoyez</button>
				</form>
			</div>
		</div>
		<div class="row">
			<h2 class="text-center">Avis des visiteurs :</h2>
			<?php while ($data = $dataReview->fetch()): ?>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="box"><br>
						<h4 class="link">
							&nbsp;Auteur : <?= $data['1'] ?>
							<i class="pull-right">Le <?= $data['3'] ?>&nbsp;</i>
						</h4>
						<h4 class="link">&nbsp;Message :</h4>
						<p class="indent text-justify" style="padding: 10px"><?= htmlspecialchars($data['2']) ?></p><br>
					</div>
				</div>
			</div><br>
			<?php endwhile ?>
			
		</div>
	</div>

<?php
$content = ob_get_clean();
require 'template_fr.php';
?>