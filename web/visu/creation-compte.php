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
require_once 'navbar.php'; 
?>

<form action="creation-compte2.php" method="POST">

</div>
    <div style="text-align: center;">
        <br><br><br><br><br><br>
        <h4 id="Left" id="black">Inscrivez vous gratuitement </h4>
        <form id="black">
            <div class="form-group">
                <label for="exampleInputEmail1">Address Mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
        Nom :<input type="text" name="Nom" class=form-group>
        Prénom :<input type="text" name="Prenom" class=form-group> 
        Mot de passe :<input type="password" name="MotDePasse" class=form-group>
        Adresse Mail : <input type="email" name="AdressEmail" class=form-group>
        Adresse : <input type="text" name="Adresse" class=form-group>
        Code Postal : <input type="text" name="CodePostal" pattern="[0-9]{5}" class=form-group>
        Ville : <input type="text" name="Ville" class=form-group>
        Pays : <input type="text" name="Pays" class=form-group>
        <button type="submit">Créer un compte</button>



</form>

</body>
</html>