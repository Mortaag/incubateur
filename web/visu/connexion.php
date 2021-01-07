<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Tickets</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>

<nav class= "nav-bar">


<img src="../images/the_tickets.png" alt="Logo de The TheTickets" class="logo" href="index.php">
<ul>
    
    <li><a href="../index.php">Page d'Accueil</a></li>
    <li><a href="../visu/organisation.php">Les évènements</a></li>
    <li class="select"><a href="../visu/connexion.php">Inscription/ Connection</a></a></li>
    <li><a href="../visu/paiement.php">Le Paiement</a></li>
    <li><a href="../visu/qrcode.php">Qr code page</a></li>
  </ul>
</nav>
<div class= "margin-top">

  <div id="page">
    <div id="header" class="header">
  <h1>ICI, TU PEUX T'IDENTIFIER OU TE CONNECTER SI TU AS DEJA UN COMPTE!</h1>

    <div id="page">
        <div id="header" class="header">
    <a href="connexion.php">
        <img src="../images/connexion_inscription.jpg" alt="image de connexion" class="connexion" href="connection.php">
</a>
<?php 

    $username=$_POST['username'];
    $motdepasse=$_POST['mdp'];
    $email=$_POST['user_email'];
    $erreur = null;

 ?>
<body>
<form  action="interface-user.php"  method="post">
  <div>
      <p>
      <label  for="Prénom">Prénom:</label>
      <input  type="text"  id="prenom"  name="username" required>
      </p>
      <p> <?php 
      if($_POST['Prénom'] === 'username') {
        if(empty($_POST['Prénom'])) {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location : /interface-user.php');
        exit();
        } else {
          $erreur = 'Identifiants Incorrects';
        }
      }  ?>
    </div>  
  <div>
      <label  for="nom">mot de passe :</label>
      <input  type="text"  id="nom"  name="mdp" required>
      <p> <?php 
      if($_POST['motdepasse'] === 'mdp') {
        if(empty($_POST['mdp'])) {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location : /interface-user.php');
        exit();
        } else {
          $erreur = 'Identifiants Incorrects';
        }
      }
      ?> 
      </p>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required>
        <p> <?php 
        
          ?> </p>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
    </form>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus et labore fugiat minima provident ad blanditiis quibusdam iusto ratione itaque enim dicta, suscipit cumque esse iste dolorem quisquam dolores tempore.</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga fugit libero, tempore quidem illo veritatis veniam error alias placeat similique quos tempora excepturi molestias nihil vitae minima esse provident officia.</p>
<br>
<p>Lorem ipsum dolor</p>    
</div>
</body>    
</html>           