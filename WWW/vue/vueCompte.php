<!DOCTYPE HTML>

<?php require('../WWW/controleur/controleurCreerCompte.php'); ?>

<HTMl>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Simulis</title>
        <link rel="stylesheet" href="static/css/bootstrap.min.css">
        <link rel="stylesheet" href="static/css/style.css">
        <link rel="shortcut icon" href="#">   
        
        <!-- scripts -->
        <script src="static/js/jquery-3.6.0.min.js"></script>
        <script src="static/js/script.js"></script>
        <script src="static/js/bootstrap.min.js"></script>
        <script src="static/js/bootstrap.bundle.js"></script>
    </head>

    <?php require("../WWW/static/header.php"); ?>
    <body>    
        <div class="card bg-light Box-Inscription"> 
            <h5 class="card-header">S'inscrire</h5>
                <div class="card-body">
                    <form  name="formeInscription" id="register_form" action="" method="POST" >
                        <div id="error_msg"></div>
                        
                        <label>Votre nom :</label>
                        <input type="text" name="Nom" required="Saisissez votre nom"></br>
            
                        <label>Votre prénom :</label>
                        <input type="text" name="Prenom" required="Saisissez votre prénom"></br>

                        <div>
                        <label>Votre email :</label></br>
                        <input  type="email" name="email" placeholder="Email@example.com" required="Saisissez votre email" id="id_email"></br>
                        <span></span>
                        </div>

                        <label>Un mot de passe :</label></br>
                        <input type="password" name="MotDePasse" required="Saisissez un mot de passe" minlength="6" id="id_password"></br></br>
                        <input type="submit" name="ValiderFormInscription" value="Valider" id="btn_form">
                    </form>
                </div>
                <div class="card-footer text-muted">
                    <div class="card-body">
                        <h5>Dejà un compte ?</h5>
                            <form>
                                <a href="index.php?page=Connexion" class="btn btn-primary">Se connecter</a>
                            </form>
                    </div>
                </div>
        </div>  
    </body>

    <?php require("../WWW/static/footer.php");?>

</HTMl>