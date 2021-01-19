<?php 

session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
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
    <form action=organisation2.php class="row g-3 container mx-auto" method="post">
        <div class="col-12">
            <label for="inputAddress" class="form-label">Adresse de l'évenement</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">Ville de l'événement</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Departement de l'évenement</label>
            <select id="inputState" class="form-select">
            <option selected>Choosis...</option>
            <option>01 - Ain - Bourg-en-bresse</option>
            <option>02 - Aisne - Laon</option>
            <option>03 - Allier - Moulins</option>
            <option>04 - Alpes-de-Haute-Provence - Digne-les-bains</option>
            <option>05 - Hautes-alpes - Gap</option>

          </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Code postal</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <a class="btn btn-primary" href="creationterminer.html" role="button">Créer l'évenement</a>
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