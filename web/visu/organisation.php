<?php 

session_start();
require_once "equipedev.php";
require_once "navbar.php";

if(isset($_SESSION['idUtilisateur']))
{
	$bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');
	$req=$bd->query("SELECT * FROM Utilisateurs WHERE idUtilisateur=".$_SESSION['idUtilisateur']);
	$utilisateur=$req->fetch();
}
else
{
	header('Location:erreur.php'); // Aucun accès
}


?>

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
<body>


<?php 
require_once 'navbar.php';
?>
<div class= "margin-top">
  <?php 

//   if(isset($_SESSION['IdUtilisateur'])) {

//     echo" <div id='page'>
//     <div id='header' class='header'>
//   <h1>ICI, TU PEUX CREER ET PERSONNALISER TA BILLETERIE EN LIGNE ET LA GERER FACILEMENT!</h1>

//   <form action='organisation2.php' method='post'>
//     Nom de l'évènement<input type='text' name='Nom'>
//     Description de l'évènement<input type='text' name='Description'>
//     Nombre de place<input type='number' name='NbPlaces'>
//     <button type='submit'>Payer</button>
//   </form>";
//   } else {
//     echo "<div id='page'>
//     <div id='header' class='header'>
//   <h1>ICI, TU PEUX CREER ET PERSONNALISER TA BILLETERIE EN LIGNE ET LA GERER FACILEMENT!</h1>

//   <form action='organisation2.php' method='post'>
//     Nom de l'évènement<input type='text' name='Nom'>
//     Description de l'évènement<input type='text' name='Description'>
//     Nombre de place<input type='number' name='NbPlaces'>
//     <button type='submit'>Payer</button>
//   </form>";
//   };

  ?>
<body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <br><br> <br>
    <form action=organisation2.php class="row g-3 container mx-auto" method="post" class="form-label">
    <div class="col-12">
            <label for="inputAddress" class="form-label">Nom de l'évènement</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Nom de l'évènement" name="Nom">
          </div>
          <div class="col-12">
          <label for="inputAddress" class="form-label">Description de l'évènement</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Description" name="Description">
          
          </div>
          <div class="col-12"><label for="inputAddress" class="form-label">Nombre de places</label>
            <input type="number" class="form-control" id="inputAddress" name="NbPlaces">
          
    </div>

        <div class="col-12">
            <label for="inputAddress" class="form-label">Adresse de l'évenement</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="Adresse">
        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">Ville de l'événement</label>
            <input type="text" class="form-control" id="inputCity" name="Ville">
        </div>
        
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Code postal</label>
            <input type="number" class="form-control" id="inputZip" name="CodePostal">
        </div>

        <div class="col-12">
            <label for="inputAddress" class="form-label">Pays</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Votre pays" name="Pays">
        </div>

        <div class="col-12">
        <label for="start" class= "form-label">Date : </label>
        <input type="date" name=Date placeholder="Date de l'évènement">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Prix des places pour la date</label>
            <input type="price" class="form-control" id="inputAddress" placeholder="€" name="Prix">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit"> Créer votre évènement</button>
        </div>

    </form>

    
            <script>
// ;(function($){
// $.fn.datepicker.dates['fr'] = {
// days: ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"],
// daysShort: ["dim.", "lun.", "mar.", "mer.", "jeu.", "ven.", "sam."],
// daysMin: ["d", "l", "ma", "me", "j", "v", "s"],
// months: ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"],
// monthsShort: ["janv.", "févr.", "mars", "avril", "mai", "juin", "juil.", "août", "sept.", "oct.", "nov.", "déc."],
// today: "Aujourd'hui",
// monthsTitle: "Mois",
// clear: "Effacer",
// weekStart: 1,
// format: "dd/mm/yyyy"
// };
// }(jQuery));

// $('.datepicker').datepicker({
// language: 'fr',
// autoclose: true,
// todayHighlight: true
// })
</script>
</body>
</html>