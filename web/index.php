<?php



session_start();

$_SESSION['user'] = 'user';
$_SESSION['mot_de_passe'] = 'mdp';
$_SESSION['age'] = '24' ;



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>The Tickets</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="web/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta name="robots" content="noindex" />
</head>
<body>
    <img src="images/the_tickets.png" alt="Logo de The TheTickets" class="logo" href="index.php">
        <ul>
            <li class="select"><a href="index.php">Page d'Accueil</a></li>
            <li><a href="visu/organisation.php">Les évènements</a></li>
            <li> <?php
            if ($_SESSION['user'] === 'user' && $_SESSION['mot_de_passe'] === 'mdp') {
                echo "<html> <li> <a href='visu/interface-user.php'> Votre compte</a> </li> </html>";
            } else {
                echo "<html> <li> <a href='visu/connexion.html'> S'inscrire/se connecter </a> </li> </html>";
            }
            ?> 
            
            <a href="visu/interface-user.php">Votre compte</a></a></li>
            <li><a href="visu/paiement.php">Le Paiement</a></li>
            <li><a href="visu/qrcode.php">Qr code page</a></li>
        </ul>
        <p>
        <?php 
        
        if ($_SESSION['user'] === 'user' && $_SESSION['mot_de_passe'] === 'mdp') {
            echo "Bonsoir " . $_SESSION['user'] . "! Bienvenue sur Thetickets.fr !";
        } else {
            echo "Bonsoir ! Veuillez vous connectez pour accéder a votre compte utilisateur.";
        }
        ?>
    </p>


    <h1>
        <div id="page">
            <div id="header" class="header">
        <a href="index.php">
            <img src="images/image_concert.webp" alt="image de concert" class="concert" href="index.php">
        </a>
        </div>
    </div>
</body>
</html>
