<?php
$title = "Spot photos";
$pos = "photoSpot";
?>

<?php ob_start(); ?>
	<div class="container">
		<h4 class="text-center">
			Welcome to the Photos Spots, here you can find all good places to take your best pictures and immortalize your stay in Paris.
		</h4><br>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe  class="embed-responsive-item" src="https://www.google.com/maps/d/embed?mid=1KPk0oCuq2kokTq0vjAWiGAR2NCDOwIKU"></iframe>
		</div>
	</div><br>
<?php
$content = ob_get_clean();
require 'template_en.php';
?>