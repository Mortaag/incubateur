<?php 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" type="text/css" href="style4.css">
    <title>The Tickets</title>
</head>
<body>

<?php 
require_once "equipedev.php";
require_once 'navbar.php';


?>
<div class= "margin-top">

  <div id="page">
    <div id="header" class="header">
  <h1>ICI, TU PEUX T'IDENTIFIER OU TE CONNECTER SI TU AS DEJA UN COMPTE!</h1>

    <div id="page">
        <div id="header" class="header">
    <a href="connexion.php">
        <!-- <img src="../images/connexion_inscription.jpg" alt="image de connexion" class="connexion" href="connection.php"> -->
</a>

<form method=post action="connexion2.php">
<div id="fond1" class="w-50 p-3">
        <!-- Content here -->
        <!-- <img src="connexion_inscription.jpg" width="100% " height="100% " alt="image de connexion_inscription " style="float: left" ;> -->
    </div>
    <div style="text-align: center;">
        <br><br><br><br><br><br>
        <h4 id="Left" id="black">Connectez-vous </h4>
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse Mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name=email>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name=motdepasse>
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
    </div>



</form>





<body>

</body>    
</html>           