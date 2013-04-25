<?php
include("yla.php");
$sql = "select * from askare";
$kysely = $yhteys->prepare($sql);
$kysely->execute();
$sql2 = "select * from luokka";
$kysely2 = $yhteys->prepare($sql2);
$kysely2->execute();
$sql3 = "select * from tarkeysaste";
$kysely3 = $yhteys->prepare($sql3);
$kysely3->execute();
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
	<form action="askareenlisays.php" method="post">
	Nimi: <input type="text" name="nimi"> <br>
	Luokka: <select name="luokka">
	<?php 
	while ($rivi2 = $kysely2-> fetch()) {
		echo "<option value=\""; 
		echo $rivi2["id"];
		echo "\">";
		echo $rivi2["nimi"];
		}
	?>	 
	</select> <br>
	Tärkeysaste: <select name="taste"> 
	<?php 
	while ($rivi3 = $kysely3-> fetch()) {
		echo "<option value=\""; 
		echo $rivi3["id"];
		echo "\">";
		echo $rivi3["nimi"];
		}
	?>	
	</select><br>
	<input type="submit" value= "Lisää">
	</form>

  </body>
</html>
