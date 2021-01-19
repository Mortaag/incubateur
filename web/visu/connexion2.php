<?php 

session_start();

$bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');
$req=$bd->query("SELECT * FROM Utilisateurs WHERE AdressEmail=".$bd->quote($_POST['email'])." AND MotDePasse=".$bd->quote(hash('sha512',$_POST['motdepasse'])));
// echo "SELECT * FROM Utilisateurs WHERE AdressEmail=".$bd->quote($_POST['email'])." AND MotDePasse=".$bd->quote(hash('sha512',$_POST['motdepasse']));
// exit();

$utilisateur=$req->fetch();
if($utilisateur) // L'utilisateur existe avec ce mot de passe !
{
	$_SESSION['idUtilisateur']=$utilisateur['idUtilisateur'];
	header('Location:../index.php');
}
 else // L'utilisateur n'existe pas et/ou le mot de passe n'est pas bon 
{
	header('Location:erreur.php'); // Vers une page qui rejette le login
}

// 