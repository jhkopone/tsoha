<?php
session_start();
include ("yhteys.php");
$salasanat = array();

$sql = "select tunnus, salasana from kayttaja";
$kysely = $yhteys->prepare($sql);
$kysely->execute();

while ($rivi = $kysely->fetch()) {
	$salasanat[$rivi["tunnus"]] = $rivi["salasana"];
}

$tunnus = $_POST["tunnus"];
$salasana = $_POST["salasana"];

if (isset($salasanat[$tunnus])) {

	if ($salasanat[$tunnus] == $salasana) {
		$_SESSION["kayttaja"] = $tunnus;
		header("Location: http://jhkopone.users.cs.helsinki.fi/tsoha/askarelistaus.php");
		die();
	} 
}

?>

<p>Ongelmia kirjautumisessa!</p>
<p><a href="http://jhkopone.users.cs.helsinki.fi/tsoha/index.php">Takaisin kirjautumiseen</a></p>




