

<?php 
require_once "equipedev.php";
require_once "navbar.php";
echo '<br>
<br>
<br>
<br>
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

<form action=achatTermine.php class="row g-3 container mx-auto" method="post" class="form-label">
<div class="col-12">
            <label for="inputAddress" class="form-label">Adresse Email</label>
            <input type="text" class="form-control" id="inputAddress" name="AdressEmail" required>
</div>
<div class="col-12">
          <label for="inputName" class="form-label">Nom</label>
          <input type="text" class="form-control" id="inputName" name="Nom" required>
</div>
<div class="col-12">
          <label for="inputName" class="form-label">Prenom</label>
          <input type="text" class="form-control" id="inputName" name="Prenom" required>
</div>
<input type="hidden" name=idDate value=',$_GET['idDate'],' class=form-control>
<button type=submit> Payer </button>
</form>';