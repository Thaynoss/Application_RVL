<?php
    session_start();//Debut de session
    /* Aprés la création de compte ou la connexion on gère la session */
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

    <?php require("../WWW/static/header.php"); ?>
    
    <body>    
        <h5>Bonjour <?php echo $_SESSION["prenom"]; ?></h5>
    </body>

    <?php require("../WWW/static/footer.php"); ?>

</HTMl>