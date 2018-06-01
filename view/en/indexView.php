<?php
$title = "Home";
$pos = "index";
?>

<?php ob_start(); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<h1 class="text-center">Welcome to the Ile de la Cité website</h1>
				<p class="text-justify">
					This is a website dedicated to world heritage of Ile de la Cité, mandated by UNESCO.
					On this website, you can find all main information about this location,
					Like its history, his news or his best spots to take pictures during your travel.
					If you have any questions, please use contact support.
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
							<h2 class="caption-C">The eastern tip of the island</h2>
						</div>
					</div>
					<div class="item">
						<img src="public/images/carousel/carousel2.jpg" alt="Image2" style="width: 100%;">
						<div class="carousel-caption">
							<h2 class="caption-C">Courthouse</h2>
						</div>
					</div>
					<div class="item">
						<img src="public/images/carousel/carousel3.jpg" alt="Image3" style="width: 100%;">
						<div class="carousel-caption">
							<h2 class="caption-C">Statue of Charlemagne</h2>
						</div>
					</div>
				</div>

				<!-- Controle -->
				<a class="left carousel-control" href="#carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div> <!-- Fin carousel -->
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<h1 class="text-center">Mission Île de la Cité</h1><br>
				<blockquote>
					<p style="font-size: 24px">
						"Built a glass island on a stone island"
					</p>
					<footer style="font-size: 20px">Dominique Perrault - Architect</footer>
				</blockquote><br>
				<h2 class="link">What is it ?</h2>
				<p class="text-justify indent">
					The Île de la Cité mission is a project lauched by the former French's president François Hollande.<br>
					This project is improve this island that he considered like <ins><em>"Today lock up on herself"</em></ins>, while wanting  
					<ins><em>"preserve this unique urban landscape"</em></ins> where cohabits historical sites and public institutions, although 
					<ins><em>"enhance it and make it accessible in every sense of the word, to everyone".</em></ins>
				</p><br>
				<h2 class="link">Cast</h2>
				<p class="text-justify indent">
					In order to carry out this project, <a href="https://fr.wikipedia.org/wiki/Dominique_Perrault" target="_blank">Dominique Perrault</a>, 
					a professor at the Federal Polytechnic School of Lausanne, is the architect behind the new Longchamp Racecourse 
					and <a href="https://fr.wikipedia.org/wiki/Philippe_B%C3%A9laval" target="_blank">Philippe Bélaval</a>, President of the Centre des 
					monuments nationaux. who is also Commander  of the Order of Arts and Letters who were chosen.
				</p><br>
				<h2 class="link">The project</h2>
				<p class="text-justify indent">
					In their report, Dominique Perrault and Philippe Bélaval submitted thirty-five proposals that can be broken down into two broad categories: 
					Cross-Island and Institutions. here are some of them:
				</p>
				<div class="panel-group" id="accordion">
					<div class="panel panel-default info-id">
						<div class="panel-heading">
							<h3 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Cross-Island <i class='fas fa-caret-down pull-right'></i></a>
							</h3>
						</div>
						<div id="collapse1" class="panel-collapse collapse">
							<div class="panel-body" style="color:  #505050">
								<h3 class="link">The balcony of the island</h3>
								<p>
									Transform the South wharves into a Great Pedestrian Promenade, connecting the tip to the upstream point, the Place du Pont-Neuf 
									square to the Île-de-France square, the Vert-Galant Square to the Memorial of the Martyrs of the Deportation
								</p>
								<p>
									Adapt mobility and vehicle flows to the evolution of the island, and remove traffic on the bridge of the Archbishop's Palace to 
									create a pedestrian route from the Quai de la Tournelle to Île Saint-Louis.
								</p>
								<p>
									Set up on the tip of the island, a new symbolic place for Paris and for France: Place des Cultures.
								</p>
								<h3 class="link">The Parvis Notre-Dame</h3>
								<p>
									Unveil the Archaeological Crypt of the Parvis of Notre-Dame, by creating a glass vase.
								</p>
								<p>
									Convert the parking lot located under the forecourt into a reception gallery for visitors to the cathedral, in connection 
									with a new landing stage on the Seine, and connecting the way of a Forum, Notre-Dame, the crypt, 
									the Hotel-Dieu, and the station Saint-Michel.
								</p>
								<p>
									Connect the bottom and the top of the forecourt by large steps around a lower square at the level of the Seine.
								</p>
								<h3 class="link">The Place of Lutetia</h3>
								<p>
									Showcasing the Cité metro station in the Island's exhibition gallery, like the LouvreRivoli station, and highlighting 
									a skylight, reconfiguring access to the different levels of the museum. public space.
								</p>
								<p>
									Reinvent the current square, standardize the flooring, street furniture, signage and lighting, the forecourt of the Palace 
									of Justice at the Hôtel-Dieu, in the manner of St. Mark's Square in Venice.
								</p>
								<p>
									Connect, from below, all the institutions around the Place de Lutèce by creating a Grande Galerie. Such as an institutional 
									mail, a researcher to guide, a filterer and a reception on the same ground, in optimal reception conditions, different 
									audiences of equipment, activities, services and monuments, directly linked to public transport and the existing car park.
								</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default info-id">
						<div class="panel-heading">
							<h3 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Institutions <i class='fas fa-caret-down pull-right'></i></a>
							</h3>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body" style="color:  #505050">
								<h3 class="link">The Hôtel-Dieu</h3>
								<p>
									To open the Hôtel-Dieu by transforming the current enclosure, hermetic to the urban life, in 
									colonnade or peristyle, allowing to favor the interfaces with the city.
								</p>
								<p>
									Extend the Hotel-Dieu largely as an underpinning and link it to public transport and various facilities.
								</p>
								<p>
									Set up a reception, service and exhibition center for the visitors of the island in the South wing 
									along the Parvis de Notre-Dame: the Lutèce Pavilion
								</p>
								<h3 class="link">The Prefecture of Police of Paris</h3>
								<p>
									Partially create public arches along the New Market Quay to accommodate different activities open 
									to the public, without breaking the perfect autonomy of the Prefecture.
								</p>
								<p>
									Open a passage connecting the Place de Lutèce and the Quai du Marché Neuf along the west facade 
									of the Prefecture, and cover it with a glass roof, like the Paris galleries of the nineteenth century
								</p>
								<h3 class="link">The Flower Market</h3>
								<p>
									Draw a large glass tile on the hold of the current Flower Market, like a large greenhouse, home to the 
									Flower and Bird Market and new activities, in direct connection with the metro.
								</p>
								<h3 class="link">The Commercial Court</h3>
								<p>
									Recreate the original arcades surrounding the building and allow the establishment of services or 
									activities open to the public, between the Seine and Place de Lutèce, between Boulevard du Palais and Flower Market.
								</p>
								<h3 class="link">The Palace of Justice and National Monuments</h3>
								<p>
									Strengthen jurisdictional functions towards West on Harlay Street by redesigning accesses and flows 
									and creating a Lower Square in front of Place Dauphine.
								</p>
								<p>
									Invest some courtyards of the Palais de Justice to create new useful surfaces by covering them 
									with glass roofs, like the Louvre Palace
								</p>
								<p>
									Reveal the courtyard of the Sainte-Chapelle by a global reflection on its access and its materiality on the ground.
								</p>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-4">
				<h1>Informations :</h1><hr>
				<a class="twitter-timeline" data-theme="dark" data-height="635" data-link-color="#f7af3e" href="https://twitter.com/iledelacite_mcn?ref_src=twsrc%5Etfw">
				<p>For follow all actuality of the Island, please enable your JavaScript or follow this link</p>
			</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
			<div class="col-md-8">
				<h1>Map of the place :</h1><hr>
				<a href="public/images/plan.svg" target="_blank">
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
require 'template_en.php';
?>