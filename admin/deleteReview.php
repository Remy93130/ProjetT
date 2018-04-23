<?php

require 'connexionDb.php';

if (isset($_GET['target']) && $_GET['target'] > 0) {
	$sql = 'DELETE FROM review
			WHERE id = '.$_GET['target'];
	$req = $db->query($sql);
}

header('Location: admin.php');