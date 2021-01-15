<?php 

 echo'<nav class= "nav-bar">
        <img src="../images/the_tickets.png" alt="Logo de The TheTickets" class="logo" href="index.php">
        <ul>
            <li class="select"><a href="../index.php">Page d\'Accueil</a></li>
            <li><a href="../visu/organisation.php">Les évènements</a></li>
            <li>';
            if(isset($_SESSION['idUtilisateur']))
{
    echo'<a href="../visu/interface-user.php">Mon compte</a></a></li>';
}

else {
    echo '<a href="../visu/creation-compte.php">Inscription</a></a></li>';
    echo '<li><a href="../visu/connexion.php">Connexion</a></a></li>';
}
       

?>