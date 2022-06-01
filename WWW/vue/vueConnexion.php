<!DOCTYPE HTML>

<HTMl>

    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Simulis</title>
        <link rel="stylesheet" href="static/css/bootstrap.min.css">
        <link rel="stylesheet" href="static/css/style.css">    
    </head>

    <body>
        <?php require("static/header.php"); ?>
        
        <div class="card bg-light mb-4 Box-Connexion"> 
            <h5 class="card-header">Connexion</h5>
                <div class="card-body">
                    <form action="" method="POST" >
                        <h5 class="card-title">Adresse email :</h5>
                        <input type="text" name="Email" placeholder="Email@example.com" required="Saisissez votre adresse email"></br>

                        <h5 class="card-title">Mot de passe :</h5>
                        <input type="password" name="MotDePasse" required="Saisissez votre mot de passe"></br></br>
                        
                        <input type="checkbox" name="ResterConnecter"> Rester connecter</br></br>

                        <input type="submit" class="btn btn-primary" name="Connexion" value="Se connecter">
                        </br><?php Connexion(); ?></br>
                        <a href="">Pas de compte ? Cliquer ici !</a>
                    </form>
                </div>
        </div>       
    </body>
</HTMl>