<?php
    //session_start();//Debut de session
    require("controleurAccueil.php");

    if(isset($_POST["SOUMETTRE"])){
        create_session_by_inscription();
    }
    if(isset($_SESSION['id_session'])){
        create_session_by_connexion();
    }
    if(isset($_POST["deconnexion"])){
        session_destroy();
        header("Refresh:1; url=index.php");
    }
?>

<!DOCTYPE HTML>
<HTMl>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Simulis</title>
        
        <link rel="stylesheet" href="static/css/bootstrap.css">
        <link rel="stylesheet" href="static/css/style.css">
        
        <script src="static/js/bootstrap.min.js"></script>
        <script src="static/js/bootstrap.bundle.js"></script>
        <script src="static/js/jquery-3.6.0.min.js"></script>
        <script src="static/js/script.js"></script>
    </head>

    <?php require("header.php"); ?>
    
    <body>    
        <h5>Page d'accueil</h5>
    </body>

    <?php require("footer.php");?>

</HTMl>