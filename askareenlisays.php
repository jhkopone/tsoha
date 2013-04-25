<?php
session_start();
include ("yla.php");
kayttajatiedot();
valikko();

$nimi = $_POST["nimi"];
$luokka = $_POST["luokka"]; 
$taste = $_POST["taste"];
$kayttaja = $_SESSION["kayttaja"];

$sql2 = "SELECT id FROM kayttaja WHERE tunnus=\"" . $kayttaja . "\""; 
$kysely2 = $yhteys->prepare($sql2);
$kysely2->execute();
$kayttaja = $kysely2->fetch();
 
	$sql = "INSERT INTO askare (nimi, luokka, taste, tekija) VALUES (" . $nimi . ", " . $luokka . ", " . $taste . "," . $kayttaja .")";
	$kysely = $yhteys->prepare($sql);
	$kysely->execute();
?>