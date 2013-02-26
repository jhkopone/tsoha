<?php
include ("yla.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Salasanan vaihto</title>
  </head>
  <body>
	<?php
	kayttajatiedot();
	valikko();
	?>
    	<p>Vaihda salasana allaolevalla lomakkeella:</p>
	<form action="salasananVaihto.php" method="post">
	Vanha salasana: <input type="text" name="vanhaSalasana"> <br>
	Uusi salasana: <input type="text" name="uusiSalasana1"> <br>
	Uusi salasana uudelleen: <input type="text" name="uusiSalasana2"> <br>
	<input type="submit" value="Vaihda">
	</form>
  </body>
</html>


