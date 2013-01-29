<?php 
include("yla.php");
$sql = "select * from luokka";
$kysely = $yhteys->prepare($sql);
$kysely->execute(); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Muistilista : Luokat</title>
  </head>
  <body>
	<?php 
	kayttajatiedot(); 
	valikko();	
	?>
    <h1>Tällä sivulla voit tarkastella sekä lisätä ja poistaa luokkia</h1>
	<p>Valitse poistettavat luokat ja paina poista-nappia</p>	
    	<form action="luokanPoisto.php" method="post">
	<?php
	while ($rivi = $kysely->fetch()) {
		echo "<input type=\"checkbox\" name=\"poistettavat[]\" value=\"{$rivi["nimi"]}\">" . $rivi["nimi"] . "<br>";
	}
	?>
	<input type="submit" value="poista">
	</form>
	<hr>
	<p>Syötä lisättävän luokan nimi ja paina lisää-nappia</p>
	<form action="" method="post">
	lisättävän luokan nimi: <input type="text" nimi="luokanNimi"> <br>
	<input type="submit" value="lisää">
	</form>
  </body>
</html>
