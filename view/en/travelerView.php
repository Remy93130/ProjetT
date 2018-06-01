<?php
$title = "Voyageur";
$pos = "traveler";
?>

<?php ob_start(); ?>
	<div class="container">
		<div class="row" style="margin-top: 5%">
			<div class="col-md-6">
				<img src="public/images/traveler/traveler1.jpg" class="img-responsive" alt="Image1">
				<p>Wall of the hotel Dieu</p>
			</div>
			<div class="col-md-6">
				<h3 class="link">Stigmas of the Second World War</h3>
				<p class="text-justify text-left">
					If Paris was saved from destruction, it was nevertheless bombed and still bears scars 
					in many places in the capital. Indeed, at the rue d'Arcole, the high wall of the Hôtel Dieu 
					still bears the traces of two shells of a German tank during the liberation of Paris in August 1944.
				</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<img src="public/images/traveler/traveler2.jpg" class="img-responsive" alt="Image2">
				<p>The old medieval house by Fernand Pouillon 1958</p>
			</div>
			<div class="col-md-6">
				<h3 class="link">The fake old medieval house</h3>
				<p class="text-justify text-left">
					On Île de la Cité, at the corner of the Rue des Chantres and rue des Ursins, is a 
					house that has no equivalent in the capital. An imposing solid wood door, small lancet 
					windows, pretty wrought iron gates, exposed limestone, a tower that reminds us of the medieval 
					fortifications... This construction seems to give us a glimpse of what the houses of the old 
					Lutetia, at the time when the first stones of the Notre-Dame Cathedral were laid. Logic no, since we 
					are on the Ile de la Cité, close to the most impressive medieval building still standing in the capital!
				</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<img src="public/images/traveler/traveler3.jpg" class="img-responsive" alt="Image3">
				<p>The statue of Henri IV</p>
			</div>
			<div class="col-md-6">
				<h3 class="link">The mystery of the statue of Henry IV</h3>
				<p class="text-justify text-left">
					Indeed, in 2004, on the occasion of the restoration of the statue, are updated 7 sealed boxes containing 
					various documents. Solemnly opened by the Minister of Culture, which is more in front of an assembly of 
					intrigued journalists, one discovers there 26 medals tracing the different stages of the life of the king, 
					the story of the transport and a report of the inauguration of the statue , a copy of the Royal Economy of 
					Sully, another of the Henriade de Voltaire, and finally a History of Henry the Great of Perefixe. Yet the 
					seventh box, hidden in the head of the rider and on the lid of which is written "Mesnel", does not immediately 
					reveal its secrets: It contains a parchment rolled and very deteriorated. It was only after careful restoration 
					work that it was discovered that it contained the list of all the founders and carvers of the statue 
					under the direction of Mesnel.
				</p>
			</div>
		</div>
		<br>
	</div>
<?php
$content = ob_get_clean();
require 'template_en.php';
?>