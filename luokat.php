<!DOCTYPE html>
<html>
  <head>
    <title>Muistilista : Luokat</title>
  </head>
  <body>
	<?php include("kayttajatiedot.php"); ?>
	<?php include("valikko.php"); ?>
    <h1>Tällä sivulla voit tarkastella sekä lisätä ja poistaa luokkia</h1>
	<p>Valitse poistettavat luokat ja paina poista-nappia</p>
    	<form action="" method="post">
	<input type="checkbox" name="luokka"> esimerkkivalinta <br>
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
