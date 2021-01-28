<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>The Tickets</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style5.css">
    <link href="https://getbootstrap.com/docs/4.1/examples/cover/cover.css" rel="stylesheet">
</head>
<body>


        <?php 
        require_once "equipedev.php";
        require_once "navbar.php";
        $bd=new PDO('mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe');

        $bd->exec("INSERT INTO `Utilisateurs` ( `AdressEmail`, `Nom`, `Prenom`) VALUES (" . $bd->quote($_POST['AdressEmail']) . "," . $bd->quote($_POST['Nom']) . "," . $bd->quote($_POST["Prenom"]) . " );");
        $idUtilisateur= $bd->lastInsertId();
        $bd->exec("INSERT INTO `Tickets` ( `idDate`, `idUtilisateur`, `Prix`, `Nom`, `Prenom`) VALUES (" . $bd->quote($_POST['idDate']) . "," .$idUtilisateur . "," . $bd->quote($_POST["Prix"]) . "," . $bd->quote($_POST["Nom"] ) . "," . $bd->quote($_POST["Prenom"]) . ");");
        ?>
 



<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        
        <br><br><br><br><br><br><br><br>
        <main role="main" class=" inner cover">
            <h1 class="cover-heading">MERCI POUR VOTRE ACHAT!</h1>
            <br>
            <p class="lead">Votre achat à bien été validé, et vous êtes désormais inscrit à l'évènement.</p>
            <br>
            </main>
    </div>
    <!-- Bootstrap core JavaScript
            ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</body>

</html>