<?php



session_start();

$_SESSION['user'] = 'user';
$_SESSION['mot_de_passe'] = 'Doe';
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
    <nav class= "nav-bar">
        <img src="images/the_tickets.png" alt="Logo de The TheTickets" class="logo" href="index.php">
        <ul>
            <li class="select"><a href="index.php">Page d'Accueil</a></li>
            <li><a href="visu/organisation.php">Les évènements</a></li>
            <li> <?php
            // if ($_SESSION['user'] === 'user' && $_SESSION['mot_de_passe'] === 'mdp') {
            //     echo "<html> <li> <a href='visu/interface-user.php'> Votre compte</a> </li> </html>";
            // } else {
            //     echo "<html> <li> <a href='visu/connexion.php'> S'inscrire/se connecter </a> </li> </html>";
            // }
            ?> 

            <a href="visu/connexion.php">Votre compte</a></a></li>
            <li><a href="visu/paiement.php">Le Paiement</a></li>
            <li><a href="visu/qrcode.php">Qr code page</a></li>
        </ul>
    </nav>
    <div class= "margin-top">
        <p>
        <?php 
        
        // if ($_SESSION['user'] === 'user' && $_SESSION['mot_de_passe'] === 'mdp') {
        //     echo "Bonsoir " . $_SESSION['user'] . "! Bienvenue sur Thetickets.fr !";
        // } else {
        //     echo "Bonjour ! Noubliez pas de vous connectez pour accéder a votre compte utilisateur.";
        // }
        ?>
    </p>
    <div id="page">
            <div id="header" class="header">
         <h1>BIENVENUE!</h1>  
         <br></br>     
        <h1>PROFITE DE TA BILLETERIE EN LIGNE, AVEC THE TICKETS!</h1>


    <h1>
        <div id="page">
            <div id="header" class="header">
        <a href="index.php">
            <img src="images/concert_index.jpg" alt="image de concert" class="concert" href="index.php">
        </a>
        </div>
    </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus et labore fugiat minima provident ad blanditiis quibusdam iusto ratione itaque enim dicta, suscipit cumque esse iste dolorem quisquam dolores tempore.</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga fugit libero, tempore quidem illo veritatis veniam error alias placeat similique quos tempora excepturi molestias nihil vitae minima esse provident officia.</p>
        <br>
        <p>Lorem ipsum dolor</p>
        <br>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga fugit libero, tempore quidem illo veritatis veniam error alias placeat similique quos tempora excepturi molestias nihil vitae minima esse provident officia.</p>
    </div>
</body>
</html>














