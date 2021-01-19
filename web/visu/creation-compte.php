<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Tickets</title>
    <link rel="shortcut icon" href="web/favicon.ico" />
    <!-- <link rel="stylesheet" type="text/css" href="..\css\style.css" /> -->
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
        Nom :<input type="text" name="Nom">
        Prénom :<input type="text" name="Prenom"> 
        Mot de passe :<input type="password" name="MotDePasse">
        Adresse Mail : <input type="email" name="AdressEmail">
        Adresse : <input type="text" name="Adresse">
        Code Postal : <input type="text" name="CodePostal" pattern="[0-9]{5}">
        Ville : <input type="text" name="Ville">
        Pays : <input type="text" name="Pays">
        <button type="submit">Créer un compte</button>



</form>

</body>
</html>