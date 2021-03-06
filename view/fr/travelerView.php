<?php
$title = "Voyageur";
$pos = "traveler";
?>

<?php ob_start(); ?>
	<div class="container">
		<div class="row" style="margin-top: 5%">
			<div class="col-md-6">
				<img src="public/images/traveler/traveler1.jpg" class="img-responsive" alt="Image1">
				<p>Mur de l'Hôtel Dieu</p>
			</div>
			<div class="col-md-6">
				<h3 class="link">Stigmates de la seconde guerre mondiale</h3>
				<p class="text-justify text-left">
					Si Paris a été sauvé de la destruction, elle n'en a pas moins été bombardé et en porte encore les cicatrices à de très nombreux endroits dans la capitale.
					En effet, au niveau de la rue d'Arcole, le haut mur de l'Hôtel Dieu porte encore la trace de deux tirs d'obus d'un char Allemand lors de la libération de Paris en Août 1944.
				</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<img src="public/images/traveler/traveler2.jpg" class="img-responsive" alt="Image2">
				<p>La vieille maison médiévale par Fernand Pouillon 1958</p>
			</div>
			<div class="col-md-6">
				<h3 class="link">La fausse vieille maison médiévale</h3>
				<p class="text-justify text-left">
					Sur l’Île de la Cité, à l’angle de la rue des Chantres et de la rue des Ursins, se trouve une maison qui n’a aucun équivalent dans la capitale. Une imposante porte en bois massif, de petites fenêtres à ogives, de jolies grilles en fer forgé, des pierres calcaires apparentes, une tour qui nous rappelle celles des fortifications médiévales… Cette construction semble nous donner un aperçu de ce à quoi ressemblaient les maisons de l’ancienne Lutèce, à l’époque où les premières pierres de la Cathédrale Notre-Dame ont été posées. Logique non, puisque nous sommes sur l’Île de la Cité, à deux pas du plus imposant édifice médiéval encore sur pied dans la capitale !
				</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<img src="public/images/traveler/traveler3.jpg" class="img-responsive" alt="Image3">
				<p>La statue de Henri IV</p>
			</div>
			<div class="col-md-6">
				<h3 class="link">Le mystère de la statue d'Henri IV</h3>
				<p class="text-justify text-left">
					En effet, en 2004, à l’occasion de la restauration de la statue, sont mises à jours 7 boites scellées renfermant des documents des plus divers. Solennellement ouvertes par le ministre de la Culture, qui plus est devant une assemblée de journalistes intrigués, on y découvre 26 médailles retraçant les différentes étapes de la vie du roi, le récit du transport et un procès-verbal de l’inauguration de la statue, un exemplaire des Economies royales de Sully, un autre de la Henriade de Voltaire, et enfin une Histoire d’Henri le Grand de Péréfixe.
					Pourtant la septième boite, cachée dans la tête du cavalier et sur le couvercle de laquelle est inscrit « Mesnel »,  ne livre pas immédiatement ses secrets: Elle contient un parchemin enroulé et très détérioré. Ce n’est qu’à l’issue de minutieux travaux de restauration que l’on a découvert qu’il contenait la liste de tous les fondeurs et ciseleurs de la statue sous la direction de Mesnel.
				</p>
			</div>
		</div>
		<br>
	</div>
<?php
$content = ob_get_clean();
require 'template_fr.php';
?>