<?php
session_start();
include ("yhteys.php");

function kayttajatiedot() {?>
	<p align="right">
	<b>Olet kirjautunut sisään tunnuksella: <?php echo $_SESSION["kayttaja"]; ?> </b><br>
	<a href="salasananVaihto.php"> vaihda salasana </a> | 
	<a href="http://jhkopone.users.cs.helsinki.fi/tsoha/uloskirjautuminen.php">kirjaudu ulos</a>
	<hr>
	</p>
<?php
}

function valikko() {?>
	<p>
	<a href="askarelistaus.php"> Askareet </a>  |  
	<a href="luokat.php"> Luokat </a>  |  
	<a href="tarkeysasteet.php"> Tärkeysasteet </a>
	</p>
<?php
}
?>
