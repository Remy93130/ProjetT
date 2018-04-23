<?php

require_once 'model/VisitManager.php';

function visit($getLang) {
	$manager = new VisitManager();
	if (isset($_GET['choice'])) {
		$choice = htmlspecialchars($_GET['choice']);
	} else {
		$choice = "";
	}
	if (isset($_GET['sort'])) {
		$sort = htmlspecialchars($_GET['sort']);
	} else {
		$sort = "";
	}
	$shops = $manager->getShops($choice, $sort);
	$lang = $manager->getLanguage(htmlspecialchars($getLang));
	require 'view/' . $lang . '/visitView.php';
}

function addReview($author, $review) {
	$manager = new VisitManager();
	$result = $manager->insertReview($author, $review);

	if (!$result) {
		die('Impossible d\'ajouter votre avis');
	} else {
		header('Location: index.php?action=visit&choice=review');
	}
}