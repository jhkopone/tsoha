<?php
include("yla.php");
$sql = "select * from askare";
$kysely = $yhteys->prepare($sql);
$kysely->execute();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Askarelistaus</title>
  </head>
  <body>
	
	<?php
	kayttajatiedot();
	valikko();
	?>
    	<p>Kaikki toimitettavat askareet <br>
	Voit poistaa askareen valitsemalla sen valintaruudun ja painamalla poista-painiketta
	</p>
	<form action>
	<table border>
	<tr>
	<th> askareen nimi </th>
	<th> luokka </th>
	<th> tärkeysaste </th>
	<th> poistettavat </th>
	</tr>
	<?php
	while ($rivi = $kysely->fetch()) {
		echo "<tr>";
		echo "<td>" . $rivi["nimi"] . "</td>";	
		echo "<td>" . $rivi["luokka"] . "</td>";
		echo "<td>" . $rivi["taste"] . "</td>";
		echo "<td><input type=\"checkbox\" name=\"poistettavatAskareet[]\" value=\"\"></td>";
		echo "</tr>";
	}
	?>
	</table>
	<br>
	<?php 
	echo "<input type=\"submit\" value= \"poista\">";
	?>
	</form>
	<p>Lisää askare järjestelmään alla olevalla lomakkeella</p>
	<form action="" method="">
	Nimi: <input type="text" name=""> <br>
	Luokka: <select name="luokka"> </select> <br>
	Tärkeysaste: <select name="taste"> </select><br>
	<input type="submit" value= "Lisää">
	</form>

  </body>
</html>
