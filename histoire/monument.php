<!DOCTYPE html>
<html>
<head>
	<title>Monuments</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="icon" type="image/jpg" href="../images/ico.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
</head>
<body>
<?php
	include '../includes/header.php';
?>

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
		<div class="col-md-6">
			<a data-toggle="modal" data-target="#notredame">
				<img src="../images/notredame.jpg" class="img-circle" width="200" height="200">
			</a>
			<p>Notre-Dame</p>
		</div>
		<div class="col-md-6">
			<a data-toggle="modal" data-target="#conciergerie">
				<img src="../images/conciergerie.jpg" class="img-circle" width="200" height="200">
			</a>
			<p>La Conciergerie</p>
		</div>
	</div><br>
	<div class="row">
		<div class="col-md-6">
			<a data-toggle="modal" data-target="#saintechapelle">
				<img src="../images/saintechapelle.jpg" class="img-circle" width="200" height="200">
			</a>
			<p>La Sainte Chapelle</p>
		</div>
		<div class="col-md-6">
			<a data-toggle="modal" data-target="#tribunalcommerce">
				<img src="../images/tribunalcommerce.jpg" class="img-circle" width="200" height="200">
			</a>
			<p>Tribunal de Commerce</p>
		</div>
	</div><br>
	<div class="row">
		<div class="col-md-6">
			<a data-toggle="modal" data-target="#hoteldieu">
				<img src="../images/hoteldieu.jpg" class="img-circle" width="200" height="200">
			</a>
			<p>Hôtel Dieu</p>
		</div>
		<div class="col-md-6">
			<a data-toggle="modal" data-target="#memorial">
				<img src="../images/memorialdesmartyrs.jpg" class="img-circle" width="200" height="200">
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
		<div class="col-md-6">
			<a data-toggle="modal" data-target="#pontneuf">
				<img src="../images/pontneuf.jpg" class="img-circle" width="200" height="200">
			</a>
			<p>Pont Neuf</p>
		</div>
		<div class="col-md-6">
			<a data-toggle="modal" data-target="#pontnotredame">
				<img src="../images/pontnotredame.jpg" class="img-circle" width="200" height="200">
			</a>
			<p>Pont Notre-Dame</p>
		</div>
	</div><br>
	<div class="row">
		<div class="col-md-6">
			<a data-toggle="modal" data-target="#pontaudouble">
				<img src="../images/pontaudouble.jpg" class="img-circle" width="200" height="200">
			</a>
			<p>Pont au double</p>
		</div>
		<div class="col-md-6">
			<a data-toggle="modal" data-target="#pontsaintmichel">
				<img src="../images/pontsaintmichel.jpg" class="img-circle" width="200" height="200">
			</a>
			<p>Pont Saint Michel</p>
		</div>
	</div><br>
</div>

<?php
	include '../includes/footer.php'
?>


<!-- Modal -->
<div class="modal fade" id="notredame" role="dialog">
	<div class="modal-dialog">
		<div class="histoire modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" style="color: red"><i class="fas fa-times"></i></button>
				<h2 class="modal-title text-center">Notre-Dame de Paris</h2>
			</div>
			<div class="modal-body text-center">
				<img src="../images/notredame.jpg" width="50%" height="50%"><br><br>
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
				<button type="button" class="close" data-dismiss="modal" style="color: red"><i class="fas fa-times"></i></button>
				<h2 class="modal-title text-center">La Conciergerie</h2>
			</div>
			<div class="modal-body text-center">
				<img src="../images/conciergerie.jpg" width="50%" height="50%"><br><br>
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
				<button type="button" class="close" data-dismiss="modal" style="color: red"><i class="fas fa-times"></i></button>
				<h2 class="modal-title text-center">La Sainte-Chapelle</h2>
			</div>
			<div class="modal-body text-center">
				<img src="../images/saintechapelle.jpg" width="50%" height="50%"><br><br>
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
				<button type="button" class="close" data-dismiss="modal" style="color: red"><i class="fas fa-times"></i></button>
				<h2 class="modal-title text-center">Le Tribunal de Commerce</h2>
			</div>
			<div class="modal-body text-center">
				<img src="../images/tribunalcommerce.jpg" width="50%" height="50%"><br><br>
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
				<button type="button" class="close" data-dismiss="modal" style="color: red"><i class="fas fa-times"></i></button>
				<h2 class="modal-title text-center">L'Hôtel Dieu</h2>
			</div>
			<div class="modal-body text-center">
				<img src="../images/hoteldieu.jpg" width="50%" height="50%"><br><br>
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
				<button type="button" class="close" data-dismiss="modal" style="color: red"><i class="fas fa-times"></i></button>
				<h2 class="modal-title text-center">Le Mémorial des Martyrs</h2>
			</div>
			<div class="modal-body text-center">
				<img src="../images/memorialdesmartyrs.jpg" width="50%" height="50%"><br><br>
				<p class="text-justify">
					TODO: Faire le texte
				</p>
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
				<button type="button" class="close" data-dismiss="modal" style="color: red"><i class="fas fa-times"></i></button>
				<h2 class="modal-title text-center">Le pont Neuf</h2>
			</div>
			<div class="modal-body text-center">
				<img src="../images/pontneuf.jpg" width="50%" height="50%"><br><br>
				<p class="text-justify">
					TODO: Faire le texte
				</p>
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
				<button type="button" class="close" data-dismiss="modal" style="color: red"><i class="fas fa-times"></i></button>
				<h2 class="modal-title text-center">Le pont Notre-Dame</h2>
			</div>
			<div class="modal-body text-center">
				<img src="../images/pontnotredame.jpg" width="50%" height="50%"><br><br>
				<p class="text-justify">
					TODO: Faire le texte
				</p>
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
				<button type="button" class="close" data-dismiss="modal" style="color: red"><i class="fas fa-times"></i></button>
				<h2 class="modal-title text-center">Le pont au double</h2>
			</div>
			<div class="modal-body text-center">
				<img src="../images/pontaudouble.jpg" width="50%" height="50%"><br><br>
				<p class="text-justify">
					TODO: Faire le texte
				</p>
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
				<button type="button" class="close" data-dismiss="modal" style="color: red"><i class="fas fa-times"></i></button>
				<h2 class="modal-title text-center">Le pont Saint Michel</h2>
			</div>
			<div class="modal-body text-center">
				<img src="../images/pontsaintmichel.jpg" width="50%" height="50%"><br><br>
				<p class="text-justify">
					TODO: Faire le texte
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html> 