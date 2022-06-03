<!DOCTYPE HTML>

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

    <body>
        <?php include('../WWW/static/menu.php'); ?>  
        <h1>Creer un compte</h1>
        <p>Ensuite, renseignez ses informations supplémentaire.</p>
        
        <form method="POST">
            
            <input type="hidden" name="Nom" value="<?php echo $_POST['Nom']; ?>" >
            <input type="hidden" name="Prenom" value="<?php echo $_POST['Prenom']; ?>"> 
            <input type="hidden" name="Email" value=" <?php echo $_POST['Email'];  ?>">
            <input type="hidden" name="MotDePasse" value=" <?php echo $_POST['MotDePasse']; ?>">        


            <label for="TypeUsager">Vous êtes un :</label>
            <select name="Usager">
                <option value="Particulier">Particulier</option>
                <option value="Professionel">Professionel</option>
                <option value="Particulier">Fournisseur</option>
            </select></br>
            
            <label for="Adresse">Votre adresse </label></br>
            <input type="text" name="Adresse" required="Saisissez votre adresse"></br>

            <label for="CodePostal">Code Postal</label></br>
            <input type="text" name="CodePostal" required="Saisissez le code postal"></br>

            <label for="Ville">Votre ville :</label></br>
            <input type="text" name="Ville" required="Saisissez votre ville"></br>
            
            <div>
            <label for="Genre">Selectionnez votre genre :</label>
                
                    <input type="radio" id="F" name="RADIO" value="Femme">
                    <label for="F">Femme</label>

                    <input type="radio" id="H" name="RADIO" value="Homme">
                    <label for="Homme">Homme</label>

                    <input type="radio" id="O" name="RADIO" value="Other">
                    <label for="Other">Autre</label>
                </div>
                </br>
            
            <label for="Telephone">Numéro de téléphone :</label></br>
            <input type="tel" name="Telephone" required="Saisissez votre numéro de telephone" minlength="14" maxlength="14" placeholder="Exemple : 06 01 02 03 04"></br>

            <input type="submit" name="SOUMETTRE" value="Soumettre" ></p>
            
           <?php ValiderForm() ; ?>

        </form>
        
        
    </body>


</HTMl>