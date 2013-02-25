<?php
session_start();
unset($_SESSION["kayttaja"]);
header("Location: http://jhkopone.users.cs.helsinki.fi/tsoha/index.php");
?>
