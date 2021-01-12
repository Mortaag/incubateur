<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>The Tickets</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>
<nav class= "nav-bar">
        <img src="../images/the_tickets.png" alt="Logo de The TheTickets" class="logo" href="index.php">
        <ul class="navigation">
            <li><a href="../index.php">Page d'Accueil</a></li>
            <li class="select"><a href="../visu/organisation.php">Les évènements</a></li>
            <li><a href="../visu/creation-compte.php">Inscription/ Connection</a></li>
        </ul>
    </nav>

<?php 
require_once 'navbar.php';
?>
<div class= "margin-top">

  <div id="page">
    <div id="header" class="header">
  <h1>ICI, TU PEUX CREER ET PERSONNALISER TA BILLETERIE EN LIGNE ET LA GERER FACILEMENT!</h1>

  <form action="organisation2.php" method="post">
    Nom de l'évènement<input type="text" name="Nom">
    Description de l'évènement<input type="text" name="Descrip">
    Nombre de place<input type="number" name="NbPlaces">
  
   
    <a class= "bouton_payer" href="achatTermine.php">PAYER</a>
  </form>
  
    <div id="page">
        <div id="header" class="header">
    <a href="organisation.php">
        <img src="../images/concert_evenement.jpg" alt="image de concert" class="concert" href="organisation.php">
    </a>
    </div>
</div>

<?php
$ma_bd=new
PDO('mysql:host=localhost;dbname= c0_thetickets_bd','c0_thetickets','L3J6!;j7dA9+zBe');

$n=$ma_bd->exec("INSERT INTO SecteurEntreprise");

?>
</body>
</html>