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
    	<p>Kaikki toimitettavat askareet</p>
	<table border>
	<tr>
	<th> askareen nimi </th>
	<th> luokka </th>
	<th> tärkeysaste </th>
	</tr>
	<?php
	while ($rivi = $kysely->fetch()) {
		echo "<tr>";
		echo "<td>" . $rivi["nimi"] . "</td>";	
		echo "<td>" . $rivi["luokka"] . "</td>";
		echo "<td>" . $rivi["taste"] . "</td>";
		echo "</tr>";
	}
	?>
	</table>
  </body>
</html>
