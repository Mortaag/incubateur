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
            <li class="select"><a href="../index.php">Page d'Accueil</a></li>
        </ul>
    </nav>
    <div class= "margin-top">
        <p>
        <?php 
        $bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');

        $bd->exec("INSERT INTO `Utilisateurs` ( `AdressEmail`, `Nom`, `Prenom`) VALUES (" . $bd->quote($_POST['AdressEmail']) . "," . $bd->quote($_POST['Nom']) . "," . $bd->quote($_POST["Prenom"]) . " );");
        $idUtilisateur= $bd->lastInsertId();
        $bd->exec("INSERT INTO `Tickets` ( `idDate`, `idUtilisateur`, `Prix`, `Nom`, `Prenom`) VALUES (" . $bd->quote($_POST['idDate']) . "," .$idUtilisateur . "," . $bd->quote($_POST["Prix"]) . "," . $bd->quote($_POST["Nom"] ) . "," . $bd->quote($_POST["Prenom"]) . ");");
        ?>
    </p>

<h1> MERCI POUR VOTRE ACHAT!</h1>
<br>
<h1>Vous avez procédé au paiement. Vous avez désormais créé votre évènement !</h1>
<h1> Un peu plus bas vous pourrez recuperer votre Qr Code !!</h1>
<img class="imagepaiement" src="../images/concert_01.jpg" alt="image concert" class="concert" href="index.php">

        <a href="qrcode.php">
        </a>

        <h1>Voici votre Qr Code !</h1>
        <img src="../images/qr_code.jpg" alt="image de qr code" class="qrcode" href="qrcode.php">

        <br>
        <nav class="boite">
        <h1>Nous vous conseillons de prendre en 📷 votre Qr code afin de ne pas l'égarée !</1>
        

        </nav>
</body>
</html>