<?php 

 echo'<nav class="navbar navbar-dark bg-dark position fixed-top">
 <a class="navbar-brand " href="../index.php>
     <img src="logo_the_tickets.png" width="115 " height="80 " alt="logo de The Tickets  ">
 </a>
 <ul class="nav justify-content-center">
     <li class="nav-item">
         <a class="nav-link active" href="index.php" id="Home">ACCUEIL</a>
     </li>
     <li class="nav-item" id="NavCenter">
         <a class="nav-link" href="visu/organisation.php" id="Home">ORGANISER VOTRE EVENEMENT</a>
     </li>'
     
;
            if(isset($_SESSION['idUtilisateur']))
{
    echo "<a href='visu/deconnexion.php'><button id='login'> Déconnexion </button></a>";
    echo"<a href='visu/interface-user.php'><button id='login'> Mon compte </button></a>";
}

else {
    echo "<a href='visu/creation-compte.php'> <button id='login'> S'inscrire </button ></a>
    <a href='visu/connexion.php'><button id='login'> Se connecter </button></a>";
}
  echo '</ul> </nav>'       

?>