<?php

session_start();

$bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');
$bd->exec("INSERT INTO `Evenements` (`idUtilisateur`, `Nom`, `Description`, `NbPlaces`) VALUES (" . $_SESSION["idUtilisateur"] ."," . $bd->quote($_POST["Nom"]) . ", " . $bd->quote($_POST["Description"]) . ", " . $bd->quote($_POST["NbPlaces"]) . " ); ");
// echo "INSERT INTO `Evenements` (`idUtilisateur`, `Nom`, `Description`, `NbPlaces`) VALUES (" . $_SESSION["idUtilisateur"] ."," . $bd->quote($_POST["Nom"]) . ", " . $bd->quote($_POST["Description"]) . ", " . $bd->quote($_POST["NbPlaces"]) . " ); ";
$bd->exec("INSERT INTO `Lieux` ( `Adresse`, `Ville`, `CodePostal`,  `Pays`) VALUES (" . $bd->quote($_POST["Adresse"]) . ", " . $bd->quote($_POST["Ville"]) . "," . $bd->quote($_POST["CodePostal"]) . ",  " . $bd->quote($_POST["Pays"]) . " ); ");
// echo "INSERT INTO `Lieux` ( `Adresse`, `Ville`, `CodePostal`,  `Pays`) VALUES (" . $bd->quote($_POST["Adresse"]) . ", " . $bd->quote($_POST["Ville"]) . "," . $bd->quote($_POST["CodePostal"]) . ",  " . $bd->quote($_POST["Pays"]) . "); ";
// $bd->exec("INSERT INTO `Dates` ( `Date`, `Prix`) VALUES (" . $bd->quote($_POST["Date"]) . ", " . $bd->quote($_POST["Prix"]) . " ); ");
echo "INSERT INTO `Dates` ( `Date`, `Prix`) VALUES (" . $bd->quote($_POST["Date"]) . ", " . $bd->quote($_POST["Prix"]) . " ); ";
// header('Location:achatTermine.php');


?>