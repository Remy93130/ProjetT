<?php

require_once 'model/Manager.php';
require_once 'model/VisitManager.php';

function index($getLang) {
	$manager = new Manager();
	$lang = $manager->getLanguage(htmlspecialchars($getLang));
	require 'view/' . $lang . '/indexView.php';
}

function history($getLang) {
	$manager = new Manager();
	$lang = $manager->getLanguage(htmlspecialchars($getLang));
	require 'view/' . $lang . '/historyView.php';
}

function monument($getLang) {
	$manager = new Manager();
	$lang = $manager->getLanguage(htmlspecialchars($getLang));
	require 'view/' . $lang . '/monumentView.php';
}

function photoSpot($getLang) {
	$manager = new Manager();
	$lang = $manager->getLanguage(htmlspecialchars($getLang));
	require 'view/' . $lang . '/spotphotoView.php';
}

function architecture($getLang) {
	$manager = new Manager();
	$lang = $manager->getLanguage(htmlspecialchars($getLang));
	require 'view/' . $lang . '/architectureView.php';
}

function traveler($getLang) {
	$manager = new Manager();
	$lang = $manager->getLanguage(htmlspecialchars($getLang));
	require 'view/' . $lang . '/travelerView.php';
}

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

function about($getLang) {
	$manager = new Manager();
	$lang = $manager->getLanguage(htmlspecialchars($getLang));
	require 'view/' . $lang . '/aboutView.php';
}

function team($getLang) {
	$manager = new Manager();
	$lang = $manager->getLanguage(htmlspecialchars($getLang));
	require 'view/' . $lang . '/teamView.php';
}

function contact($getLang) {
	$manager = new Manager();
	$lang = $manager->getLanguage(htmlspecialchars($getLang));
	require 'view/' . $lang . '/contactView.php';
}

function error404($getLang) {
	$manager = new Manager();
	$lang = $manager->getLanguage(htmlspecialchars($getLang));
	require 'view/' . $lang . '/errorView.php';
}