<!DOCTYPE HTML>

<HTMl>

    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
            <title>Simulis</title>
            <link rel="stylesheet" href="static/css/bootstrap.min.css">
            <link rel="stylesheet" href="static/css/style.css">   
            <script src="static/js/bootstrap.min.js"></script>
            <script src="static/js/bootstrap.bundle.js"></script>
            <script src="static/js/script.js"></script>
    </head>

        <?php include('../WWW/static/header.php'); ?>  
    <body>
        
        <div class="card bg-light d-flex flex-column Box-Inscription"> 
            <h5 class="card-header">S'inscrire</h5>
                <div class="card-body">
                    <form action="index.php?page=CreerProfile" method="post" >
                        <label for="Nom">Votre nom :</label>
                        <input type="text" name="Nom" required="Saisissez votre nom"></br>
            
                        <label for="Prenom">Votre prénom :</label>
                        <input type="text" name="Prenom" required="Saisissez votre prénom"></br>

                        <label for="Email">Votre email :</label></br>
                        <input type="email" name="Email" placeholder="Email@example.com" required="Saisissez votre email" ></br>

                        <label for="MotDePasse">Un mot de passe :</label></br>
                        <input type="password" name="MotDePasse" required="Saisissez un mot de passe" minlength="6"></br></br>
                        <input type="submit" name="VALIDER" value="Valider"><?php// ValiderFormCompte(); ?>
                    </form>
                </div>
        </div>
    </body>

    <?php include('../WWW/static/footer.php'); ?>  

</HTMl>