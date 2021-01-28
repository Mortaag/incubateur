<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" type="text/css" href="style4.css">
    <title>The Tickets</title>
</head>

<body>
<?php 
require_once 'navbar.php';
?>
    <div class= "margin-top">
        <p>
        <?php 
        
       
        ?>
    </p>

<?php 
require_once "equipedev.php";
require_once 'navbar.php'; 
?>

<form action="creation-compte2.php" method="POST">

</div>
    <div style="text-align: center;">
        <br><br><br><br><br><br>
        <h4 id="Left" id="black">Inscrivez vous gratuitement </h4>
        <form id="black">
            <div class="form-group" class="form-group">
                
            
        
    </div>
        Nom :<input type="text" name="Nom" class=form-control>
        Prénom :<input type="text" name="Prenom" class=form-control> 
        Mot de passe :<input type="password" name="MotDePasse" class=form-control>
        Adresse Mail : <input type="email" name="AdressEmail" class=form-control>
        Adresse : <input type="text" name="Adresse" class=form-control>
        Code Postal : <input type="text" name="CodePostal" pattern="[0-9]{5}" class=form-control>
        Ville : <input type="text" name="Ville" class=form-control>
        Pays : <input type="text" name="Pays" class=form-control>
        <button type="submit">Créer un compte</button>
        </form>


</form>

</body>
</html>