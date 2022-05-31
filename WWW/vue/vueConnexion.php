<!DOCTYPE HTML>

<HTMl>

    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Simulis</title>
        <link rel="stylesheet" href="static/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">    
    </head>

    <body>
        <?php include('../WWW/static/menu.php'); ?>  
        
        <div class="card bg-light mb-4 Box-connexion"> 
            <h5 class="card-header">Connexion</h5>
                <div class="card-body">
                    <form action="<?php echo "Ok form";?>" method="POST" >
                        <h5 class="card-title">Adresse email :</h5>
                        <input type="text" name="EmailForm" placeholder="Email@example.com" required="Saisissez votre adresse email"></br>

                        <h5 class="card-title">Mot de passe :</h5>
                        <input type="password" name="MotDePasseForm" required="Saisissez votre mot de passe"></br></br>
                        
                        <input type="checkbox" name="ResterConnecter">Rester connecter</br>

                        <a href="#" action="" class="btn btn-primary">Se connecter</a>
                        <?php Connexion(); ?></p>
                    </form>
                </div>

                <div class="card-footer text-muted">
                    <a href="">Pas de compte ? Cliquer ici !</a>
                </div>
        </div>


        <form action="" method="POST">
            
            <label for="Email">Votre email:</label>
            <input type="text" name="Email" placeholder="Email@example.com" required="Saisissez votre Email"></br>
            
            <label for="MotDePasse">Votre mot de passe :</label>
            <input type="password" name="MotDePasse" required="Saisissez votre mot de passe"></br>

            <input type="submit" name="Connexion" value="S'identifiez" ></br> 
            <?php Connexion(); ?></p>
           
        </form>
    </body>
</HTMl>