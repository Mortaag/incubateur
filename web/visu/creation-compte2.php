<?php 


// $bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');
$bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');

$bd->exec("INSERT INTO `Utilisateurs` ( `Nom`, `Prenom`, `DateDeNaissance`, `Genre`, `AdressEmail`, `MotDePasse`, `Adresse`, `CodePostal`, `Ville`, `Pays`, `Statut`) VALUES ('" . $_POST['Nom'] . "', '" . $_POST['Prenom'] . "', '" . $_POST['DateNaissance'] . "', '" . $_POST['Genre'] . "', '" . $_POST['AdressEmail'] . "', '" . hash('sha512', $_POST['MotDePasse']) . "', '" . $_POST['Adresse'] . "', '" . $_POST['CodePostal'] . "', '" . $_POST['Ville'] . "', '" . $_POST['Pays'] . "', '" . $_POST['Statut'] . "') ");
// echo "INSERT INTO `Utilisateurs` ( `Nom`, `Prenom`, `DateDeNaissance`, `Genre`, `AdressEmail`, `MotDePasse`, `Adresse`, `CodePostal`, `Ville`, `Pays`, `Statut`) VALUES ('" . $_POST['Nom'] . "', '" . $_POST['Prenom'] . "', '" . $_POST['DateNaissance'] . "', '" . $_POST['Genre'] . "', '" . $_POST['AdressEmail'] . "', '" . $_POST['MotDePasse'] . "', '" . $_POST['Adresse'] . "', '" . $_POST['CodePostal'] . "', '" . $_POST['Ville'] . "', '" . $_POST['Pays'] . "', '" . $_POST['Statut'] . "') ";


header('Location:interface-user.php');


// $bd -> lastInsertId()

// La page censé présenter un utilisateur prendrait en paramètre Get qui ferait une requete afin de chercher les infos de l'utilisateur qui aurait cet ID

// 
?>

