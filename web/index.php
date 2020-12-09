<?php



session_start();

$_SESSION['user'] = 'user';
$_SESSION['mot_de_passe'] = 'mdp';
$_SESSION['age'] = '24' ;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>
        Salut <?php $_SESSION['user'] ?> ! Tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page ?
    </p>

    <ul>
        <li class="select"><a href="index.html">Page d'Accueil</a></li>
        <li><a href="visu/organisation.html">Les évènements</a></li>
        <li><a href="visu/connexion.html">Inscription/ Connection</a></a></li>
        <li><a href="visu/paiement.html">Le Paiement</a></li>
        <li><a href="visu/qrcode.html">Qr code page</a></li>
        <link rel="stylesheet" href="css/style.css">
    </ul>

    <div id="page">
        <div id="header" class="header">
            <h1>
                <a href="index.html">
                    <img src="images/the_tickets.png" alt="Logo de The TheTickets" class="logo" href="index.html">
                </a>
            </h1>
        </div>
    </div>
</body>
</html>