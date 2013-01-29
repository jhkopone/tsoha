<?php
include ("yhteys.php");

function kayttajatiedot() {?>
	<p align="right">
	<b>Olet kirjautunut sisään tunnuksella: <?php echo "Seppo"; ?> </b>
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
