

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php 
require_once 'navbar.php'; 
?>

<form action="creation-compte2.php" method="POST">
        Nom :<input type="text" name="Nom">
        Prénom :<input type="text" name="Prenom"> 
        Mot de passe :<input type="password" name="mot-de-passe">
        Adresse Mail : <input type="email" name="mail">
        Adresse : <input type="text" name="Adresse">
        Code Postal : <input type="text" name="Postal" pattern="[0-9]{5}">
        Ville : <input type="text" name="ville">
        Pays : <input type="text" name="Pays">
        <button type="submit">Créer un compte</button>

</form>
</body>
</html>