<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>The Tickets</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>

<?php 
require_once 'navbar.php';
?>
<div class= "margin-top">

  <div id="page">
    <div id="header" class="header">
  <h1>ICI, TU PEUX CREER ET PERSONNALISER TA BILLETERIE EN LIGNE ET LA GERER FACILEMENT!</h1>

  <form action="" method="post">
    Nom de l'évènement<input type="text" name="Nom">
    Description de l'évènement<input type="text" name="Description">
    Nombre de place<input type="number" name="NbPlaces">
  
   
  <button><a href=""> Payer</a></button>
  </form>
  <?php
$bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');
// $bd->exec("INSERT INTO `Utilisateurs` ( `Nom`, `Description`, `NbPlaces`) VALUES ('" . $_POST['Nom'] . "', '" . $_POST['Description'] . "', '" . $_POST['NbPlaces'] . "') ");
echo "INSERT INTO `Utilisateurs` ( `Nom`, `Description`, `NbPlaces`) VALUES ('" . $_POST['Nom'] . "', '" . $_POST['Description'] . "', '" . $_POST['NbPlaces'] . "') ";

?>
    <div id="page">
        <div id="header" class="header">
    <a href="organisation.php">
        <img src="../images/concert_evenement.jpg" alt="image de concert" class="concert" href="organisation.php">
    </a>
    </div>
    </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus et labore fugiat minima provident ad blanditiis quibusdam iusto ratione itaque enim dicta, suscipit cumque esse iste dolorem quisquam dolores tempore.</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga fugit libero, tempore quidem illo veritatis veniam error alias placeat similique quos tempora excepturi molestias nihil vitae minima esse provident officia.</p>
        <br>
        <p>Lorem ipsum dolor</p>
               
</div>

<<<<<<< HEAD
<?php
$ma_bd=new
PDO('mysql:host=localhost;dbname= c0_thetickets_bd','c0_thetickets','L3J6!;j7dA9+zBe');

$n=$ma_bd->exec("INSERT INTO SecteurEntreprise");

?>
=======

>>>>>>> 5cf68c93672d401df6caaeda29b8e5450f5ce1b0
</body>
</html>