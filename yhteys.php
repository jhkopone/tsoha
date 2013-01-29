<?php
try {
	$yhteys = new PDO("pgsql:host=localhost;dbname=jhkopone", "jhkopone", 			"a0de283b1821c844");	
} catch (PDOException $e) {
	die("VIRHE: " . $e->getMessage());
}

$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
