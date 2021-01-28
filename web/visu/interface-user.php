<meta charset="utf-8" lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>The Tickets</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css"rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style4.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <?php 

    session_start();
    require_once "equipedev.php";
    require_once "navbar.php";
    ?>
    <style type="text/css">
    /* body {
        color: #444444;
        background-color: #EEEEEE;
        font-family: 'Trebuchet MS', sans-serif;
        font-size: 80%;
    }
    h1 {
        color : black;
    }
    h2 { font-size: 1.2em; }
    #page{
        background-color: #FFFFFF;
        width: 60%;
        margin: 24px auto;
        padding: 12px;
    }
    #header {
        padding: 6px ;
        text-align: center;
        background-color: darkcyan;
    }
    .status3xx { background-color: #475076; color: #FFFFFF; }
    .status4xx { background-color: #C55042; color: #FFFFFF; }
    .status5xx { background-color: #F2E81A; color: #000000; }
    #content {
        padding: 4px 0 24px 0;
    }
    #footer {
        color: #666666;
        background: #f9f9f9;
        padding: 10px 20px;
        border-top: 5px #efefef solid;
        font-size: 0.8em;
        text-align: center;
    }
    #footer a {
        color: #999999;
    }  */

    
    </style>
    
</head>
<body class=text-center>

    <div id="page">
        <div id="header" class="header">
            <h1>
                
            </h1>
            <h2> Check your account</h2>
        </div>
        <div id="content">
            <br>
            <h3>Cette page est l'interface utilisateur de votre compte.</h2>
            <br>
            <p>Pour revenir à l'accueil, veuillez cliquez sur le mot <b>"Accueil",</b>dans la barre de navigation</p>
        </div>
        <div id="footer">
            <!-- <p>Powered by <a href="https://www.ispconfig.org">ISPConfig</a></p> -->
        </div>
    </div>
    <!-- <a href="deconnexion.php" class="href">Se déconnecter</a> -->
</body>
</html>