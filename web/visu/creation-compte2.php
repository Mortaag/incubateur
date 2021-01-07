<?php 


// $bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');
$bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','root','L3J6!;j7dA9+zBe');

$bd->exec("INSERT INTO `Utilisateurs` (`idUtilisateur`, `idEntreprise`, `Nom`, `Prenom`, `DateDeNaissance`, `Genre`, `AdressEmail`, `MotDePasse`, `Adresse`, `CodePostal`, `Ville`, `Pays`, `Statut`) VALUES (NULL, NULL, '" . $_POST['Nom'] . "', '" . $_POST['Prenom'] . "', '" . $_POST['DateNaissance'] . "', '" . $_POST['Genre'] . "', '" . $_POST['AdressMail'] . "', '" . $_POST['Nom'] . "', '" . $_POST['Nom'] . "', '" . $_POST['Nom'] . "', '" . $_POST['Nom'] . "', '" . $_POST['Nom'] . "', '" . $_POST['Nom'] . "') ");


header('Location:interface-user.php');

?>