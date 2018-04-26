<?php
$title = "Accueil";
$pos = "index";
?>

<?php ob_start(); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h3 class="text-center test">Bienvenue sur le site de l'Ile de la Cité</h3>
				<p class="text-justify">
					Voici notre site consacré au patrimoine mondial de l'Ile de la Cité, mandaté par l'UNESCO.
					Vous trouverez sur ce site toute les informations essentielles sur l'Ile de la Cité.
					tel que son histoire, son actualité ou encore ses meilleures spot photographiques 
					pour prendre les meilleurs photos de l'Ile lors de votre voyage. Si vous avez des questions
					n'hésité pas à utiliser le support contact.
				</p>
			</div>
		</div>
		<div class="row">
			<div id="carousel" class="carousel slide" data-ride="carousel"> <!-- Debut carousel -->
				<!-- Indicateur -->
				<ol class="carousel-indicators">
					<li data-targer="#carousel" data-slide-to="0" class="active"></li>
					<li data-targer="#carousel" data-slide-to="1"></li>
					<li data-targer="#carousel" data-slide-to="2"></li>
				</ol>
				<!-- Images -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="public/images/carousel/carousel1.jpg" alt="Image1" style="width: 100%;">
						<div class="carousel-caption">
							<h2 class="caption-C">La pointe Est de l'Ile</h2>
						</div>
					</div>
					<div class="item">
						<img src="public/images/carousel/carousel2.jpg" alt="Image2" style="width: 100%;">
						<div class="carousel-caption">
							<h2 class="caption-C">Palais de Justice</h2>
						</div>
					</div>
					<div class="item">
						<img src="public/images/carousel/carousel3.jpg" alt="Image3" style="width: 100%;">
						<div class="carousel-caption">
							<h2 class="caption-C">Statue de Charlemagne et ses Leudes</h2>
						</div>
					</div>
				</div>

				<!-- Controle -->
				<a class="left carousel-control" href="#carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Précedent</span>
				</a>
				<a class="right carousel-control" href="#carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Suivant</span>
				</a>
			</div> <!-- Fin carousel -->
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<h1 class="text-center">Mission Île de la Cité</h1><br>
				<blockquote>
					<p style="font-size: 24px">
						"Construire une île de verre sur une île de pierre"
					</p>
					<footer style="font-size: 20px">Dominique Perrault - Architecte</footer>
				</blockquote><br>
				<h2 class="link">Qu'est-ce que c'est ?</h2>
				<p class="text-justify indent">
					La mission Île de la Cité est un projet qui à été lancé par l'ancien président
					de la république François Hollande.<br>
					Ce projet est de transformer cette île qu'il considère comme <ins><em>"aujourd'hui enfermée sur elle-même"</em></ins>, tout en
					voulant <ins><em>"conserver ce paysage urbain unique"</em></ins> où cohabitent sites historiques et institutions
					publiques, mais <ins><em>"le mettre en valeur et le rendre accessible dans tous les sens du terme, à tous".</em></ins>
				</p><br>
				<h2 class="link">Les acteurs</h2>
				<p class="text-justify indent">
					Afin de mener à bien ce projet, ce sont <a href="https://fr.wikipedia.org/wiki/Dominique_Perrault" target="_blank">Dominique Perrault</a>,
					un professeur à l'école polytechnique fédérale de Lausanne, c'est l'architecte à l'origine du nouvel Hippodrome de Longchamp ainsi que 
					<a href="https://fr.wikipedia.org/wiki/Philippe_B%C3%A9laval" target="_blank">Philippe Bélaval</a>, président du Centre des monuments 
					nationaux qui est également commandeur de l'Ordre des arts et lettres qui ont été choisis.
				</p><br>
				<h2 class="link">Le projet</h2>
				<p class="text-justify indent">
					Lors de leur rapport, Dominique Perrault et Philippe Bélaval ont soumis trente-cinq proposition que l'ont peut dissocier en deux grandes
					catégories : Le travers de l'île et les institutions, en voici quelques une.
				</p>
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">A travers l'Île <i class='fas fa-caret-down pull-right'></i></a>
							</h3>
						</div>
						<div id="collapse1" class="panel-collapse collapse">
							<div class="panel-body" style="color:  #505050">
								<h3 class="link">Le balcon de l'île</h3>
								<p>
									Transformer les quais Sud en grande promenade piétonne, reliant la pointe aval à la pointe amont, de la
									place du Pont-Neuf au square de l'Île-de-France, du Square du Vert-Galant au Mémorial des Martyrs de la
									Déportation
								</p>
								<p>
									Adapter la mobilité et les flux véhicules à l’évolution de l’île, et supprimer la circulation automobile sur le
									Pont de l'Archevêché afin de créer un parcours piéton du Quai de la Tournelle à l'Île Saint-Louis. 
								</p>
								<p>
									Aménager sur la pointe amont de l’île, une nouvelle place symbolique pour Paris et pour la France : La
									Place des Cultures. 
								</p>
								<h3 class="link">Le Parvis Notre-Dame</h3>
								<p>
									Dévoiler la Crypte archéologique du Parvis de NotreDame, par la création d'un sol de verre.
								</p>
								<p>
									Convertir le parc de stationnement situé sous le Parvis en Galerie d'accueil pour les visiteurs de la cathédrale,
									en lien avec un nouveau débarcadère côté Seine, et permettant de relier à la manière d’un Forum, NotreDame,
									la crypte, l'Hôtel-Dieu, et la station SaintMichel.
								</p>
								<p>
									Relier le dessous et le dessus du Parvis par des grandes marches autour d’une place basse située au niveau de
									la Seine.
								</p>
								<h3 class="link">La Place de Lutèce</h3>
								<p>
									Mettre en scène la station de métro Cité en galerie d’exposition de l'Île, à l'instar de la station LouvreRivoli
									et la mettre en lumière par le percement d’un puits de lumière, reconfigurant les accès aux différents
									niveaux de l’espace public.
								</p>
								<p>
									Réinventer l’actuelle place, en uniformisant le revêtement de sol, le mobilier urbain, la signalétique
									et la mise en lumière, du parvis du Palais de Justice à l'Hôtel-Dieu, à la manière de la place Saint-Marc à
									Venise.
								</p>
								<p>
									Relier, par le dessous, l’ensemble des institutions situées autour de la place de Lutèce par la création
									d’une Grande Galerie. Tel un mail institutionnel, elle permettrait d’orienter, de filtrer et d’accueillir sur un
									même sol, dans des conditions d’accueil optimales, les différents publics des divers équipements, activités,
									services et monuments, en lien direct avec les transports publics et le parc de stationnement existant.
								</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Au fil des institution <i class='fas fa-caret-down pull-right'></i></a>
							</h3>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body" style="color:  #505050">
								<h3 class="link">L'Hôtel-Dieu</h3>
								<p>
									Désenclaver l’Hôtel-Dieu en transformant l'enceinte actuelle, hermétique à la vie urbaine, en colonnade ou
									péristyle, permettant de favoriser les interfaces avec la ville.
								</p>
								<p>
									Étendre largement l'Hôtel-Dieu en sous-œuvre et le relier aux transports publics et différents équipements.
								</p>
								<p>
									Installer un pôle d’accueil, de services et d’exposition à l’attention des visiteurs de l’île dans l’aile Sud le long
									du Parvis de Notre-Dame : le Pavillon Lutèce
								</p>
								<h3 class="link">La préfecture de Police de Paris</h3>
								<p>
									Créer partiellement des arcades publiques le long du Quai du Marché Neuf permettant d’accueillir
									différentes activités ouvertes au public, sans rompre la parfaite autonomie de la Préfecture.
								</p>
								<p>
									Ouvrir un passage reliant la Place de Lutèce et le Quai du Marché Neuf le long de la façade Ouest de la
									Préfecture, et le couvrir par une verrière, à l’image des galeries parisiennes du XIXe siècle
								</p>
								<h3 class="link">Le Marché aux Fleurs</h3>
								<p>
									Dessiner un grand Carreau de verre sur l’emprise de l’actuel Marché aux Fleurs, comme une grande serre,
									abritant le Marché aux fleurs et aux oiseaux et de nouvelles activités, en lien direct avec le métro.
								</p>
								<h3 class="link">Le Tribunal de Commerce</h3>
								<p>
									Recréer les arcades originelles ceinturant le bâtiment
									et permettre l’implantation de services ou activités
									ouvertes au public, entre Seine et Place de Lutèce,
									entre boulevard du Palais et Marché aux Fleurs.
								</p>
								<h3 class="link">Le Palais de Justice et les monuments nationaux</h3>
								<p>
									Renforcer les fonctions juridictionnelles vers l’Ouest sur la rue de Harlay par une refonte des accès et des
									flux et la création d’une Place Basse devant la place Dauphine.
								</p>
								<p>
									Investir certaines cours du Palais de Justice pour créer de nouvelles surfaces utiles par la couverture de celles-ci
									par des verrières, à l’image du Palais du Louvre
								</p>
								<p>
									Révéler la cour de la Sainte-Chapelle par une réflexion globale sur ses accès et sa matérialité au sol.
								</p>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div><br><hr><br>
		<div class="row">
			<div class="col-md-4">
				<h2>Informations :</h2><hr>
				<a class="twitter-timeline" data-theme="dark" data-height="635" data-link-color="#f7af3e" href="https://twitter.com/iledelacite_mcn?ref_src=twsrc%5Etfw">
					<p>Pour suivre toute l'actualité de l'Île de la Cité, nous vous invitons à activer votre JavaScript pour voir le fil d'actualité ou suivre ce lien.</p>
				</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
			<div class="col-md-8">
				<h2>Carte du lieu :</h2><hr>
				<a href="public/images/plan.svg">
					<img class="img-responsive plan" src="public/images/plan.svg" alt="Plan">
					<div class="captionI">
						<div class="caption-content">
							<i class="fa fa-search-plus fa-3x"></i>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div><br>
<?php 
$content = ob_get_clean(); 
require 'template_fr.php';
?>