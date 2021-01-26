<?php

session_start();



?>


<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>The Tickets</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
    
<?php 
require_once 'visu/navbar.php';
?>

<section>

<?php 
$bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');
?>
         <div class="leftBox">
            <div class="content">
                <h1>Evenement</h1>
                <p>BIENVENUE. The Tickets est une billetterie en ligne qui vous permet d'organiser simplement des évènements qui vous correspondent. Créez vous-même des moments et des évènements inoubliables pour tisser des liens forts avec votre public.
                    Une vraie solution pour tous les types d'évènements: Concert, spectacle, séminaire etc...</p>
                <p>ICI, TU PEUX CREER ET PERSONNALISER TA BILLETERIE EN LIGNE ET LA GERER FACILEMENT!</p>
            </div>
        </div>
        <div class="events">
            <ul>
<?php
$mois=array('01'=>'Janvier', '02'=>'Février', '03'=>'Mars', '04' => 'Avril', '05' => 'Mai', '06' => 'Juin', '07' => 'Juillet', '08' => 'Aout', '09' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' =>'Décembre');
$res=$bd->query("SELECT * FROM Dates JOIN Evenements USING(idEvenement) WHERE Date>CURRENT_DATE() ORDER BY Date LIMIT 3");
foreach($res as $ligne)
{
    $req2=$bd->query("SELECT COUNT(*) AS nb FROM Tickets WHERE idDate=".$ligne['idDate']);
    $nb=$req2->fetch();
    echo'                <li>
                    <div class="time">
                        <h2>',substr($ligne['Date'],8,2),'<br><span>',$mois[substr($ligne['Date'],5,2)],'</span></h2>
                    </div>
                    <div class="details">
                        <h3>',$ligne['Nom'],'</h3>
                        <p>',$ligne['Description'],'</p>
                        <p class="text-capitalize" id="restantes">Places restantes : ',($ligne['NbPlaces']-$nb['nb']),'</p>
                        <a href="date.php?idDate=',$ligne['idDate'],'"><button type="button" class="btn btn-outline-primary">Plus D\'info</button></a>
                    </div>
                    <div style="clear: both;"></div>
                </li>';
}
?>
            </ul>
        </div> -->
    </section>
    <footer class="position fixed-bottom container py-3 bg-light">
        <div class="row">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                <small class="d-block mb-3 text-muted">&copy; equipe dev web The Tickets : 2020-2021</small>
                <p>L'equipe de dévelopeur</p>
            </div>
            <div class="col-6 col-md">
                <br>
                <h5>DEV </h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Alice Petitjean</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <br>
                <h5>DEV</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Leandre Gaden</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <br>
                <h5>DEV</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="https://github.com/BijotVictor">Victor Bijot</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>














