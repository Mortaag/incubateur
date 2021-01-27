<?php 
$bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');


$res=$bd->query("SELECT * FROM Dates JOIN Evenements USING(idEvenement) JOIN Lieux USING(idLieu) WHERE idDate=".$_GET['idDate']);
$evenement=$res->fetch();

echo"<h1>",$evenement['Nom'],"</h1>";
echo "<p>",$evenement['Description'], "</p>";
echo"Nombre places : ",$evenement['NbPlaces'];
echo"Date : ",$evenement['Date'];
echo "Prix : ",$evenement['Prix'];
echo"Lieu : ",$evenement['Adresse']," ",$evenement['CodePostal']," ",$evenement['Ville']," ",$evenement['Pays'];

echo"<a href=formulaire-paiement.php?idDate=",$evenement['idDate'],">Acheter</a>";

?>