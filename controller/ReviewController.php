<?php

require_once 'model/ReviewManager.php';

function review($getLang) {
	$manager = new ReviewManager();
	$lang = $manager->getLanguage(htmlspecialchars($getLang));
	$dataReview = $manager->getReviews();
	require_once 'view/'.$lang.'/reviewView.php';
}

function addReview($author, $review) {
	$manager = new ReviewManager();
	$result = $manager->insertReview($author, $review);

	if (!$result) {
		die('Impossible d\'ajouter votre avis');
	} else {
		header('Location: index.php?action=review');
	}
}