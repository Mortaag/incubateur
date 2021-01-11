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
            <li> 
            <a href="visu/creation-compte.php">Inscription/ Connection</a></a></li>
            <li><a href="visu/paiement.php">Le Paiement</a></li>
            <li><a href="visu/qrcode.php">Qr code page</a></li>
        </ul>
    </nav>
    <div class= "margin-top">
        <p>
        <?php 
        
       
        ?>
    </p>
    <div id="page">
            <div id="header" class="header">
         <h1>BIENVENUE</h1>  
         <br></br>     
        <h1>Profitez de votre billeterie en ligne, avec The Tickets!</h1>


    <h1>
        <div id="page">
            <div id="header" class="header">
        <a href="index.php">
            <img src="images/concert_index.jpg" alt="image de concert" class="concert" href="index.php">
        </a>
        </div>
    </div>
        <p>The Tickets est une billetterie en ligne qui vous permet d'organiser simplement des évènements qui vous correspondent.</p>
        <p>Créez vous-même des moments et des évènements inoubliables pour tisser des liens forts avec votre public.</p>
        <div id="page">
            <div id="header" class="header">
        <a href="index.php">
            <img src="images/ticket_index.jpg" alt="image de ticket" class="ticket" href="index.php">
        </a>
        </div>
        <p>Une vrai solution pour tout les types d'évènements: Concert, spectacle, séminaire etc...</p>
    </div> 
</body>
</html>














