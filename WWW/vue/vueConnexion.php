<!DOCTYPE HTML>

<HTMl>

    <head>
        <meta charset="utf-8">
        <title>Simulis</title>
        <link rel="stylesheet" href="/css/style.css">
        
    </head>

    <body>
        <?php include('../WWW/static/menu.php'); ?>  
        <h1>Page de connexion</h1>
        <p>Veuillez vous identifiez ..</p>
 
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