<!DOCTYPE HTML>

<HTMl>

    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Simulis</title>
        <link rel="stylesheet" href="/css/style.css">
        
    </head>

    <body>
        <?php include('../WWW/static/menu.php'); ?>  
        <h1>Créer un compte</h1>
        <p>Veuillez d'abord renseignez ..</p>
 
        <form action="index.php?page=CreerProfile" method="POST">
            


            <label for="Nom">Votre nom :</label>
            <input type="text" name="Nom" required="Saisissez votre nom"></br>
            
            <label for="Prenom">Votre prénom :</label>
            <input type="text" name="Prenom" required="Saisissez votre prénom"></br>

            <label for="Email">Votre email :</label></br>
            <input type="email" name="Email" placeholder="Email@example.com" required="Saisissez votre email" ></br>

            <label for="MotDePasse">Un mot de passe :</label></br>
            <input type="password" name="MotDePasse" required="Saisissez un mot de passe" minlength="6"></br>

            <input type="submit" name="VALIDER" value="Valider" ></br> 
            <?php// ValiderFormCompte(); ?></p>
           
        </form>
        
    </body>


</HTMl>