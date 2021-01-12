<?php
$bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');
$bd->exec("INSERT INTO `Evenements` ( `Nom`, `Description`, `NbPlaces`) VALUES ('" . $_POST['Nom'] . "', '" . $_POST['Description'] . "', '" . $_POST['NbPlaces'] . "') ");
// echo "INSERT INTO `Evenements` ( `Nom`, `Descrip`, `NbPlaces`) VALUES ('" . $_POST['Nom'] . "', '" . $_POST['Descrip'] . "', '" . $_POST['NbPlaces'] . "') ";

header('Location:achatTermine.php');

?>