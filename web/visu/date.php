<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>The Tickets</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css"rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style4.css">
</head>

<?php 
require_once "equipedev.php";
require_once "navbar.php";
$bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');


$res=$bd->query("SELECT * FROM Dates JOIN Evenements USING(idEvenement) JOIN Lieux USING(idLieu) WHERE idDate=".$_GET['idDate']);
$evenement=$res->fetch();
echo "<br> <br> <br> <br>";
echo"<h2 class=text-center> ",$evenement['Nom'],"</h2>";
echo "<p class=text-center> ",$evenement['Description'], " </p>";
echo"<p class=text-center> <b>Nombre places :</b> ",$evenement['NbPlaces'],' </p>';
echo"<p class=text-center> <b>Date :</b> ",$evenement['Date'],' </p>';
echo "<p class=text-center><b> Prix :</b> ",$evenement['Prix'],'€ </p>';
echo"<p class=text-center><b> Lieu :</b> ",$evenement['Adresse']," ",$evenement['CodePostal']," ",$evenement['Ville']," ",$evenement['Pays'],' </p>';

echo"<p class=text-center><a  href=formulaire-paiement.php?idDate= ",$evenement['idDate'],  ">Acheter</a> </p>";

?>