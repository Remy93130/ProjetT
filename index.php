<?php

require_once 'controller/BasicController.php';
require_once 'controller/VisitController.php';
require_once 'controller/ReviewController.php';

try {
	$lang = (isset($_GET['lang'])) ? $_GET['lang'] : 'fr' ;
	if (isset($_GET['action'])) {
		if ($_GET['action'] == "index") {
			index($lang);
		} else if ($_GET['action'] == "history") {
			history($lang);
		} else if ($_GET['action'] == "monument") {
			monument($lang);
		} else if ($_GET['action'] == "photoSpot") {
			photoSpot($lang);
		} else if ($_GET['action'] == "architecture") {
			architecture($lang);
		} else if ($_GET['action'] == "traveler") {
			traveler($lang);
		} else if ($_GET['action'] == "visit") {
			visit($lang);
		} else if ($_GET['action'] == "about") {
			about($lang);
		} else if ($_GET['action'] == "team") {
			team($lang);
		} else if ($_GET['action'] == "contact") {
			contact($lang);
		} elseif ($_GET['action'] == 'review') {
			review($lang);
		} else if ($_GET['action'] == "addReview") {
			if (isset($_POST['name']) && isset($_POST['review'])) {
				if (!empty($_POST['name']) && !empty($_POST['review'])) {
					addReview($_POST['name'], $_POST['review']);
				} else {
					visit($lang);
				}
			} else {
				visit($lang);
			}
		} else {
			error404($lang);
		}
	} else {
		index($lang);
	}
} catch (Exception $e) {
	echo "Une erreur c'est produit : " . $e->getMessage();
}