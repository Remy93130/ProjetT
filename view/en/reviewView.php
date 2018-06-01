<?php 
$title = "Your opinion";
$pos = "review";
?>

<?php ob_start(); ?>
	<div class="container">
		<div class="row">
			<h1 class="text-center">
				Your opinion
			</h1>
			<p class="text-center">
				Here you have the opportunity to post a review and read those of other visitors, what are you waiting for ? Go for it !
			</p>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Post a review</h2>
				<form method="post" action="index.php?action=addReview">
					<label for="name">Your name :</label>
					<input class="form-control" type="text" name="name"><br>
					<label for="review">Your message :</label>
					<textarea class="form-control" name="review" rows="4"></textarea><br>
					<button type="submit" class="btn btn-default">Send</button>
				</form>
			</div>
		</div>
		<div class="row">
			<h2 class="text-center">Opinions of visitors :</h2>
			<?php while ($data = $dataReview->fetch()): ?>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="box"><br>
						<h4 class="link">
							&nbsp;Author : <?= $data['1'] ?>
							<i class="pull-right">The <?= $data['3'] ?>&nbsp;</i>
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
require 'template_en.php';
?>