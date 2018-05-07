<?php
$title = "Monuments";
$pos = "monument";
?>

<?php ob_start(); ?>
	<div class="container text-center">
		<div class="row">
			<p>
				Cet onglet recense tous les édifices les plus importants présents sur l'Île de la cité, cliquez sur l'un d'entre eux pour le découvrir !
			</p>
		</div>
		<div class="partie text-justify" id="monument">
			<h2 class="transit">Monuments</h2>
		</div>

		<div class="row">
			<div class="col-md-4">
				<a data-toggle="modal" data-target="#notredame">
					<img src="public/images/monument/notredame.jpg" class="img-circle" width="200" height="200">
				</a>
				<p>Notre-Dame</p>
			</div>
			<div class="col-md-4">
				<a data-toggle="modal" data-target="#conciergerie">
					<img src="public/images/monument/conciergerie.jpg" class="img-circle" width="200" height="200">
				</a>
				<p>La Conciergerie</p>
			</div>
			<div class="col-md-4">
				<a data-toggle="modal" data-target="#saintechapelle">
					<img src="public/images/monument/saintechapelle.jpg" class="img-circle" width="200" height="200">
				</a>
				<p>La Sainte Chapelle</p>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4">
				<a data-toggle="modal" data-target="#tribunalcommerce">
					<img src="public/images/monument/tribunalcommerce.jpg" class="img-circle" width="200" height="200">
				</a>
				<p>Tribunal de Commerce</p>
			</div>
			<div class="col-md-4">
				<a data-toggle="modal" data-target="#hoteldieu">
					<img src="public/images/monument/hoteldieu.jpg" class="img-circle" width="200" height="200">
				</a>
				<p>Hôtel Dieu</p>
			</div>
			<div class="col-md-4">
				<a data-toggle="modal" data-target="#memorial">
					<img src="public/images/monument/memorialdesmartyrs.jpg" class="img-circle" width="200" height="200">
				</a>
				<p>Mémorial des Martyrs</p>
			</div>
		</div>

		<div class="row">
			<div class="partie text-justify" id="pont">
				<h2 class="transit">Ponts</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<a data-toggle="modal" data-target="#pontneuf">
					<img src="public/images/monument/pontneuf.jpg" class="img-circle" width="200" height="200">
				</a>
				<p>Pont Neuf</p>
			</div>
			<div class="col-md-4">
				<a data-toggle="modal" data-target="#pontnotredame">
					<img src="public/images/monument/pontnotredame.jpg" class="img-circle" width="200" height="200">
				</a>
				<p>Pont Notre-Dame</p>
			</div>
			<div class="col-md-4">
				<a data-toggle="modal" data-target="#pontaudouble">
					<img src="public/images/monument/pontaudouble.jpg" class="img-circle" width="200" height="200">
				</a>
				<p>Pont au double</p>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4">
				<a data-toggle="modal" data-target="#pontsaintmichel">
					<img src="public/images/monument/pontsaintmichel.jpg" class="img-circle" width="200" height="200">
				</a>
				<p>Pont Saint Michel</p>
			</div>
		</div><br>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="notredame" role="dialog">
		<div class="modal-dialog">
			<div class="histoire modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="color: red; font-size: 32px"><i class="fas fa-times"></i></button>
					<h2 class="modal-title text-center">Notre-Dame de Paris</h2>
				</div>
				<div class="modal-body text-center">
					<img src="public/images/monument/notredame.jpg" width="50%" height="50%"><br><br>
					<p class="text-justify">
						La cathédrale Notre-Dame de Paris, est la cathédrale de l’archidiocèse de Paris, en France. 
						Elle est située dans l'est de l’île de la Cité, dans le 4e arrondissement de Paris.
						Sa construction à commencée sous la demande de l’évêque Maurice de Sully, elle s'étend sur plus de deux siècles, de 1163 au milieu du xive siècle. 
					</p>
					<button data-toggle="collapse" data-target="#notredame-plus" class="button-more">En savoir plus...</button>
					<div id="notredame-plus" class="collapse">
						<p class="text-justify">
							Le style n’est donc pas d’une uniformité totale : la cathédrale possède ainsi des caractères du gothique primitif et du gothique rayonnant. C'est donc le style gothique qui domine mais sous deux formes différentes.
							Les deux rosaces qui ornent chacun des bras du transept sont parmi les plus grandes d’Europe, et mesurent chacune treize mètres de diamètre. Lors de son achèvement, la cathédrale est l'une des plus grandes d'Occident.
							Après la tourmente révolutionnaire, la cathédrale bénéficie de 1844 à 1864 d'une restauration importante, sous la direction de l’architecte Viollet-le-Duc, qui y incorpore des éléments et des motifs inédits.
							La cathédrale est depuis l'origine l'un des monuments les plus emblématiques de Paris. 
							Longtemps plus haute construction de la ville, elle occupe à Paris une place symbolique de premier rang, et est l'une des plus célèbres cathédrales du pays. Édifice à la fois religieux et patrimonial, elle est liée à de nombreux épisodes de l’histoire de France.
							Des cérémonies religieuses y ont lieu à la mort du général de Gaulle le 12 novembre 1970, de Georges Pompidou le 6 avril 1974, et de François Mitterrand le 11 janvier 1996.
							Dans le domaine littéraire, elle figure notamment au centre du roman de Victor Hugo, Notre-Dame de Paris, publié en 1831.
							Cette cathédrale accueille aujourd’hui plus de 20 millions de visiteurs par an (dont 13,6 millions qui y sont entrés en 20112), ce qui en fait le monument le plus visité de Paris et de toute l’Europe. 
							Elle fête en 2013 le 850e anniversaire de sa construction.
						</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="conciergerie" role="dialog">
		<div class="modal-dialog">
			<div class="histoire modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="color: red; font-size: 32px"><i class="fas fa-times"></i></button>
					<h2 class="modal-title text-center">La Conciergerie</h2>
				</div>
				<div class="modal-body text-center">
					<img src="public/images/monument/conciergerie.jpg" width="50%" height="50%"><br><br>
					<p class="text-justify">
						La Conciergerie faisait partie du Palais de la Cité, appelé Le Palais royale ou encore aujourd’hui Le Palais de Justice, Le Palais était la résidence et le siège du pouvoir des rois de France, du xe au xive siècle. 
						Il s’étendait sur la partie ouest de l’Île de la Cité dans le 1er arrondissement de Paris.
					</p>
					<button data-toggle="collapse" data-target="#conciergerie-plus" class="button-more">En savoir plus...</button>
					<div id="conciergerie-plus" class="collapse">
						<p class="text-justify">
								Une partie du palais était convertie en prison d’État en 1370, après l’abandon du palais par Charles V et ses successeurs. 
								La prison de la Conciergerie occupait le rez-de-chaussée du bâtiment bordant le quai de l’Horloge et les deux tours ; l’étage supérieur était réservé au Parlement. 
								La prison était considérée pendant la Terreur comme l’antichambre de la mort. Peu en sortaient libres. La reine Marie-Antoinette y fut emprisonnée en 1793.
								De nos jours, une grande partie du site est occupée par le Palais de justice de Paris et l'essentiel des vestiges de ce palais sont constitués par l'ancienne prison de la 	Conciergerie qui longe le quai de l'Horloge,
								au nord-est de l'île, ainsi que par la Sainte-Chapelle.
							</p>
						</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="saintechapelle" role="dialog">
		<div class="modal-dialog">
			<div class="histoire modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="color: red; font-size: 32px"><i class="fas fa-times"></i></button>
					<h2 class="modal-title text-center">La Sainte-Chapelle</h2>
				</div>
				<div class="modal-body text-center">
					<img src="public/images/monument/saintechapelle.jpg" width="50%" height="50%"><br><br>
					<p class="text-justify">
						La Sainte-Chapelle, dite aussi Sainte-Chapelle du Palais, est une chapelle palatine édifiée sur l’île de la Cité, à Paris, à la demande de saint Louis afin d’abriter la Sainte Couronne d’épines, un morceau de la Vraie Croix, celle où J-C a été crucifié ainsi que diverses autres reliques de la Passion qu’il avait acquises à partir de 1239.
					</p>
					<button data-toggle="collapse" data-target="#saintechapelle-plus" class="button-more">En savoir plus...</button>
					<div id="saintechapelle-plus" class="collapse">
						<p class="text-justify">
							Elle est la première construite des Saintes chapelles, conçue comme une vaste châsse presque entièrement vitrée, et se distingue par l'élégance et la hardiesse de son architecture, 
							qui se manifeste dans une élévation importante et la suppression quasi totale des murs au niveau des fenêtres de la chapelle haute. Bien qu'édifiée dans un bref ( 7 ans ), 
							il n'y a aucun défauts de construction, et la décoration n'a pas été négligée. Elle fait notamment appel à la sculpture, la peinture et l'art du vitrail : 
							ce sont ses immenses vitraux historiés d'origine qui font aujourd'hui la richesse de la Sainte-Chapelle, car elle a été privée de ses reliques à la Révolution française, 
							et perdu ainsi sa principale raison d'être.. En 1797, elle est transformée en dépôt d'archives du palais de justice, et l'expansion de celui-ci menace son existence même. Son sauvetage est décidé en 
							1836 sous la pression de l'opinion publique, et sa restauration est lancée un an plus tard et dure vingt-six ans. En tant qu'édifice emblématique du style gothique rayonnant, la Sainte-Chapelle 
							est classée monument historique par liste de 1862, un an avant l'achèvement de sa restauration, qui est l'une des plus réussies de son temps. Ceci n'empêche pas qu'en raison de son piètre état
							en 1836, le monument que l'on voit aujourd'hui est essentiellement un monument du xixe siècle.
							Avec la Conciergerie, la Sainte-Chapelle constitue l'un des vestiges du palais de la Cité, 
							qui s’étendait sur le site couvrant l’actuel palais de justice. Elle est gérée par le Centre des monuments nationaux, auquel elle a été attribuée à titre de dotation par un arrêté du 2 avril 2008. 
							Desservi par la station de métro Cité, le monument a accueilli en 2013 plus d'un million de visiteurs, en faisant le troisième monument géré par le Centre des monuments nationaux le plus visité.
						</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="tribunalcommerce" role="dialog">
		<div class="modal-dialog">
			<div class="histoire modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="color: red; font-size: 32px"><i class="fas fa-times"></i></button>
					<h2 class="modal-title text-center">Le Tribunal de Commerce</h2>
				</div>
				<div class="modal-body text-center">
					<img src="public/images/monument/tribunalcommerce.jpg" width="50%" height="50%"><br><br>
					<p class="text-justify">
						Le tribunal de Commerce de Paris est un bâtiment situé sur la rive nord de l'île de la Cité à Paris, abritant le Tribunal de commerce de la capitale française.
						Situé entre le quai de la Corse, le Boulevard du Palais, la rue de Lutèce et la rue Aubé, il fut construit 1860 à 1865, sur les plans de l'architecte Antoine-Nicolas Bailly (1810-1892), sous ordre de l'empereur Napoléon III
					</p>
					<button data-toggle="collapse" data-target="#tribunalcommerce-plus" class="button-more">En savoir plus...</button>
					<div id="tribunalcommerce-plus" class="collapse">
						<p class="text-justify">
							Le tribunal est construit à l'emplacement de la partie ouest de la rue de la Pelleterie1. 
							Pour permettre la construction du nouveau bâtiment, le bal du Prado, qui se trouvait à l'angle de la rue de la Pelleterie et de la rue de la Barillerie (actuellement boulevard du Palais), est démoli en 1858. 
							Il occupait le théâtre de la Cité-Variétés, lui-même construit à l'emplacement de l'église Saint-Barthélemy
						</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="hoteldieu" role="dialog">
		<div class="modal-dialog">
			<div class="histoire modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="color: red; font-size: 32px"><i class="fas fa-times"></i></button>
					<h2 class="modal-title text-center">L'Hôtel Dieu</h2>
				</div>
				<div class="modal-body text-center">
					<img src="public/images/monument/hoteldieu.jpg" width="50%" height="50%"><br><br>
					<p class="text-justify">
						L’Hôtel-Dieu de Paris est le plus ancien hôpital de la capitale. Fondé en 651 par l'évêque parisien saint Landry, il fut le symbole de la charité et de l'hospitalité.
						Modeste à l'origine, il est construit du viie au xviie siècle sur la rive gauche de l'île de la Cité, au sud du Parvis Notre-Dame - place Jean-Paul-II ; Deux bâtiments étaient reliés par le pont au Double.
						Les constructions actuelles abritant l'hôpital datent du xixe siècle.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="memorial" role="dialog">
		<div class="modal-dialog">
			<div class="histoire modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="color: red; font-size: 32px"><i class="fas fa-times"></i></button>
					<h2 class="modal-title text-center">Le Mémorial des Martyrs</h2>
				</div>
				<div class="modal-body text-center">
					<img src="public/images/monument/memorialdesmartyrs.jpg" width="50%" height="50%"><br><br>
					<p class="text-justify">
						Situé sur l'Ile de la Cité à Paris, derrière le chevet de la cathédrale Notre-Dame,
						le Mémorial des martys de la Deportation a été inauguré le 12 avril 1962
						par le général de Gaulle. Il rappelle certains aspects 
						caractéristiques du monde concentrationnaire comme l'emprisonnement, l'oppression, 
						ou encore l'évasion impossible. C'est une oeuvre de l'architecte Georges-Henri Pingusson.
					</p>
					<button data-toggle="collapse" data-target="#memorial-plus" class="button-more">En savoir plus...</button>
					<div id="memorial-plus" class="collapse">
						<p class="text-justify">
							C'est lieu plutôt propice à la réflexion car c'est au cœur du bâtiment que le visiteur ressent le mieux l'esprit qui présida à cette construction, 
							le souvenir de tous ces pauvres gens qui partirent de France pour l'enfer concentrationnaire. 
							Le mémorial est aussi au centre de la cérémonie annuelle, le dernier dimanche d'avril, 
							de la Journée nationale du souvenir des martyrs et des héros de la déportation.
							Ce lieu montre donc l'horreur d'un système qui, pour des 
							motifs idéologiques, condamna des millions d'êtres humains à l'esclavage et à 
							la mort, il est fait pour montrer l'horreur des régimes totalitaires.
						</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="pontneuf" role="dialog">
		<div class="modal-dialog">
			<div class="histoire modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="color: red; font-size: 32px"><i class="fas fa-times"></i></button>
					<h2 class="modal-title text-center">Le pont Neuf</h2>
				</div>
				<div class="modal-body text-center">
					<img src="public/images/monument/pontneuf.jpg" width="50%" height="50%"><br><br>
					<p class="text-justify">
						Le pont Neuf est, malgré son nom, 
						le plus ancien pont existant de Paris. Il traverse la Seine à la pointe ouest de l'île de la Cité.
						Il est long de 140 mètres et large de 20 mètres environ.
						Le pont est commencé en 1578 sous sous le règne du Roi Henri III est achevé en 1604 sous celui du Roi Henri IV.
					</p>
					<button data-toggle="collapse" data-target="#pontneuf-plus" class="button-more">En savoir plus...</button>
					<div id="pontneuf-plus" class="collapse">
						<p class="text-justify">
							Ses travaux sont dirigés dans un premier temps par l'architecte Baptiste 
							Androuet du Cerceau, puis ensuite par Guillaume Marchant.
							Ils seront interrompus par les guerres de Religion, de 1588 à 1599. 
							Henri IV, qui inaugurera l'ouvrage en 1607, le baptisera du nom Pont Neuf, 
							appelé au moment de sa construction par opposition aux anciens ponts de Paris.
							C'est un pont en arc, en effet on le reconnaît à ses 12 arches en plein cintre et à sa statue équestre d’Henri IV,
							première effigie exposée en France sur une voie publique.
						</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="pontnotredame" role="dialog">
		<div class="modal-dialog">
			<div class="histoire modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="color: red; font-size: 32px"><i class="fas fa-times"></i></button>
					<h2 class="modal-title text-center">Le pont Notre-Dame</h2>
				</div>
				<div class="modal-body text-center">
					<img src="public/images/monument/pontnotredame.jpg" width="50%" height="50%"><br><br>
					<p class="text-justify">
						Le Pont Notre-Dame est comme son nom l'indique, un pont permettant d'acceder au quartier de Notre-Dame
						en reliant le quai de Gesvres au quai de la Corse sur l'île de la Cité.
						Il est long de 105 mètres environ et large de 20 mètres. 
						Il occupe l'emplacement de l'un des tout premiers ponts de la capitale : le "Grand-Pont", 
						remplacé par les "planches de Milbray" et enfin l'actuel.
					</p>
					<button data-toggle="collapse" data-target="#pontnotredame-plus" class="button-more">En savoir plus...</button>
					<div id="pontnotredame-plus" class="collapse">
						<p class="text-justify">
							Beaucoup de pont ont été à son emplacement auparavant, celui actuel à été construit de 
							1910 à 1914 et réalisée par l'ingénieur Jean Résal.
							Il comportait initialement cinq arches, mais étant devenu très dangereux pour la navigation, son nombre
							a été réduit à trois en 1912, dont une arche centrale métallique de 60 mètres.
						</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="pontaudouble" role="dialog">
		<div class="modal-dialog">
			<div class="histoire modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="color: red; font-size: 32px"><i class="fas fa-times"></i></button>
					<h2 class="modal-title text-center">Le pont au double</h2>
				</div>
				<div class="modal-body text-center">
					<img src="public/images/monument/pontaudouble.jpg" width="50%" height="50%"><br><br>
					<p class="text-justify">
						Le pont porte ce nom car le péage pour le 
						franchissement du premier pont à cet emplacement était de deux deniers, monnaie de base du système monétaire romain.
						Il relie le 4e arrondissement au 5e.
						Il est long de 45 mètres et large de 20 mètres.
						Sa construction s'est faites de 1881 à 1883 et les architectes sont Henri-Prosper Bernard et Jules Lax
					</p>
					<button data-toggle="collapse" data-target="#pontaudouble-plus" class="button-more">En savoir plus...</button>
					<div id="pontaudouble-plus" class="collapse">
						<p class="text-justify">
							Le pont est fait de fonte mais en réalité, il a simplement été refait car ce pont existe depuis
							1632 et c'est en 1634 qu'un péage va être installé, il va subsister jusqu'en 1789.
						</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="pontsaintmichel" role="dialog">
		<div class="modal-dialog">
			<div class="histoire modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="color: red; font-size: 32px"><i class="fas fa-times"></i></button>
					<h2 class="modal-title text-center">Le pont Saint Michel</h2>
				</div>
				<div class="modal-body text-center">
					<img src="public/images/monument/pontsaintmichel.jpg" width="50%" height="50%"><br><br>
					<p class="text-justify">
						Le Pont Saint Michel a été construit en 1857 à la demande de Napoléon III par les ingénieurs Vaudrey de La Galisserie
						Il relie l'Ile de la Cité à la rive gauche par la place Saint Michel. Ce nom lui a été donné car le pont
						est très proche de la Sainte Chapelle. Il est long de 62 mètres et larges de 30 mètres 
					</p>
					<button data-toggle="collapse" data-target="#pontsaintmichel-plus" class="button-more">En savoir plus...</button>
					<div id="pontsaintmichel-plus" class="collapse">
						<p class="text-justify">
							Le pont construit initialement en 1378 fut reconstruit plusieurs fois, 
							en dernier lieu en 1857. Le pont fut en bois et ensuite, après sa destruction, en pierre.
							Aujourd'hui le pont est en pierre et il comporte trois arches
							Au au dessus de chaque pile un "N" gravé, rappelant l'emblème impérial de Napoléon III.
						</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
<?php
$content = ob_get_clean();
require 'template_fr.php';
?>