<?php 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Tickets</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>

<?php 
require_once 'navbar.php';


?>
<div class= "margin-top">

  <div id="page">
    <div id="header" class="header">
  <h1>ICI, TU PEUX T'IDENTIFIER OU TE CONNECTER SI TU AS DEJA UN COMPTE!</h1>

    <div id="page">
        <div id="header" class="header">
    <a href="connexion.php">
        <img src="../images/connexion_inscription.jpg" alt="image de connexion" class="connexion" href="connection.php">
</a>

<form method=post action="connexion2.php">

Email : <input type=email name=email>
Mot de passe : <input type=password name=motdepasse>
<button type="submit"> Créer</button>

</form>





<body>

</body>    
</html>           