<?php
$title = "Spot photos";
$pos = "photoSpot";
?>

<?php ob_start(); ?>
	<div class="container">
		<h3 class="text-center">
			Bienvenue sur le Spot photos, ici vous pourrez trouvez tout les lieux intéressant afin de prendre vos meilleurs photos pour immortaliser votre séjour à Paris
		</h3><br>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe  class="embed-responsive-item" src="https://www.google.com/maps/d/embed?mid=1KPk0oCuq2kokTq0vjAWiGAR2NCDOwIKU"></iframe>
		</div>
	</div><br>
<?php
$content = ob_get_clean();
require 'template_en.php';
?>