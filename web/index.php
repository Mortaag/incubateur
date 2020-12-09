<?php

session_start();

$_SESSION = ['utilisateur'] = 'user';
$_SESSION = ['mot_de_passe'] = 'mdp';
$_SESSION = ['age'] = '24' ;

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

    <ul>
        <li class="select"><a href="index.html">Page d'Accueil</a></li>
        <li><a href="visu/organisation.html">Les évènements</a></li>
        <li><a href="visu/connexion.html">Inscription/ Connection</a></a></li>
        <li><a href="visu/paiement.html">Le Paiement</a></li>
        <li><a href="visu/qrcode.html">Qr code page</a></li>
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