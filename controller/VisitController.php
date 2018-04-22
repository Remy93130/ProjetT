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