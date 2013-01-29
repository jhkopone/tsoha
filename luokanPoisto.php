<?php
include ("yhteys.php");
$poistettavat = $_POST["poistettavat"];
for ($i = 0; $i < count($poistettavat); $i++) {
	$sql = "DELETE FROM luokka WHERE nimi = \"{$poistettavat[$i]}\"";
	$kysely = $yhteys->prepare($sql);
	$kysely->execute();
	
	echo "poistettu onnistuneesti!";		
} 
	echo "ongelmia poistossa!";
?>
