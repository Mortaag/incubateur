<?php 

session_start();


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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>The Tickets</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>


<?php 
require_once 'navbar.php';
?>
<div class= "margin-top">
  <?php 

  if(isset($_SESSION['IdUtilisateur'])) {

    echo" <div id='page'>
    <div id='header' class='header'>
  <h1>ICI, TU PEUX CREER ET PERSONNALISER TA BILLETERIE EN LIGNE ET LA GERER FACILEMENT!</h1>

  <form action='organisation2.php' method='post'>
    Nom de l'évènement<input type='text' name='Nom'>
    Description de l'évènement<input type='text' name='Description'>
    Nombre de place<input type='number' name='NbPlaces'>
    <button type='submit'>Payer</button>
  </form>";
  } else {
    echo "<div id='page'>
    <div id='header' class='header'>
  <h1>ICI, TU PEUX CREER ET PERSONNALISER TA BILLETERIE EN LIGNE ET LA GERER FACILEMENT!</h1>

  <form action='organisation2.php' method='post'>
    Nom de l'évènement<input type='text' name='Nom'>
    Description de l'évènement<input type='text' name='Description'>
    Nombre de place<input type='number' name='NbPlaces'>
    <button type='submit'>Payer</button>
  </form>";
  };

  ?>
<body>

    <br><br>
    <form action=organisation2.php class="row g-3 container mx-auto" method="post" class="form-label">

          Nom de l'évènement<input type='text' name='Nom'>
          Description de l'évènement<input type='text' name='Description'>
          Nombre de place<input type="number" name='NbPlaces'>
        

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
            <input type="text" class="form-control" id="inputZip" name="CodePostal">
        </div>

        <div class="col-12">
            <label for="inputAddress" class="form-label">Pays</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Votre pays" name="Pays">
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit"> Créer votre évènement</button>
        </div>

    </form>

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
                    <li><a class="text-muted" href="#">Victor Bijot</a></li>
                </ul>
            </div>

</body>
</html>