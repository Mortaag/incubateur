<?php

session_start();

$bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');
$bd->exec("INSERT INTO `Evenements` (`idUtilisateur`, `Nom`, `Description`, `NbPlaces`) VALUES (" . $_SESSION["idUtilisateur"] ."," . $bd->quote($_POST["Nom"]) . ", " . $bd->quote($_POST["Description"]) . ", " . $bd->quote($_POST["NbPlaces"]) . " ); ");
// echo "INSERT INTO `Evenements` (`idUtilisateur`, `Nom`, `Description`, `NbPlaces`) VALUES (" . $_SESSION["idUtilisateur"] ."," . $bd->quote($_POST["Nom"]) . ", " . $bd->quote($_POST["Description"]) . ", " . $bd->quote($_POST["NbPlaces"]) . " ); ";

header('Location:achatTermine.php');

?>