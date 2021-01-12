<?php
$bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');
// $bd->exec("INSERT INTO `Evenements` ( `Nom`, `Description`, `NbPlaces`,`IdUtilisateur`) VALUES ('" . $_POST['Nom'] . "', '" . $_POST['Description'] . "', '" . $_POST['NbPlaces'] . "', '" . $_POST['IdUtilisateur'] ."'); ");
echo "INSERT INTO `Evenements` (`idUtilisateur`, `Nom`, `Description`, `NbPlaces`) VALUES ('" . $_POST["idUtilisateur"] ."','" . $_POST["Nom"] . "', '" . $_POST["Description"] . "', '" . $_POST["NbPlaces"] . "' ); ";

// header('Location:achatTermine.php');

?>