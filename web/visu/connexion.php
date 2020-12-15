<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
    $number = $_POST['user_number'];
    $message = $_POST['user_message'];
    $sujet = $_POST ['sujet'];
if ($_POST) {
  $tab = array();

  if(empty($_POST['user_name'])) {
    $tab['user_name'] = " Ton nom d'utilisateur ne peut pas être vide.";
  }
  if(empty($_POST['user_email'])) {
    $tab ['user_email'] = " Ton email ne peut pas être vide." ;
  }
  if(empty($_POST['mdp'])) {
    $tab ['mdp'] = " Ton mot de passe ne peut pas être vide";
  } else {
    echo ' <div  class="button"><button  type="submit">Envoyer votre message</button></div>';
  }
    
} ?>
<body>
<form  action="interface-user.php"  method="post">
  <div>
      <p>
      <label  for="Prénom">Prénom:</label>
      <input  type="text"  id="prenom"  name="username" required>
      </p>
      <p> <?php if(empty($_POST['username'])) { 
        echo $tab['username'];} ?> </p>
    </div>  
  <div>
      <label  for="nom">mot de passe :</label>
      <input  type="text"  id="nom"  name="mdp" required hash>
      <p> <?php if(empty($_POST['mdp'])) { 
        echo $tab['mdp'];} ?> </p>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required>
        <p> <?php if(empty($_POST['user_email'])) { 
          echo $tab['user_email'];} ?> </p>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
    
    </form>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus et labore fugiat minima provident ad blanditiis quibusdam iusto ratione itaque enim dicta, suscipit cumque esse iste dolorem quisquam dolores tempore.</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga fugit libero, tempore quidem illo veritatis veniam error alias placeat similique quos tempora excepturi molestias nihil vitae minima esse provident officia.</p>
<br>
<p>Lorem ipsum dolor</p>
      
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga fugit libero, tempore quidem illo veritatis veniam error alias placeat similique quos tempora excepturi molestias nihil vitae minima esse provident officia.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam doloremque sunt ipsam porro cumque nam molestiae cupiditate quasi amet minima aliquid hic deleniti eius aspernatur nobis quae, ratione facilis ab.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis cum architecto nulla mollitia quasi quis, inventore explicabo ab a minima magnam quas recusandae dolores dolorem dolor temporibus in! Doloribus, repudiandae.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam porro consequatur velit molestias sint illum delectus veniam nam fuga assumenda iste, inventore praesentium reprehenderit est tenetur eius repudiandae sunt eveniet.</p>  
</div>

</body>    
</html>       