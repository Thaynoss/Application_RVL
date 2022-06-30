<?php

function email_already_use($connexion){

    if ( isset($_POST['email_check']) ) {
        $email = $_POST["email"];
        
        $sql = "SELECT * FROM rvl_table.personne WHERE personne_email=\" $email\" ";
        $results = mysqli_query($connexion, $sql);
        
        if (mysqli_num_rows($results) > 0) {

        echo json_encode(["taken"=>true]); //Ptit coup de json pour valider si email déja prise est renvoyé une data exploitable   
        }else{
            echo json_encode(["taken"=>false]);
        
        }
        exit();
    }

}

function email_already_use_valide_FORM($connexion){
    if ( isset($_POST['ValiderFormInscription']) ) {
        $email = $_POST["email"];
        $sql = "SELECT * FROM rvl_table.personne WHERE personne_email=\" $email\" ";
        $results = mysqli_query($connexion, $sql);
        
        if (mysqli_num_rows($results) > 0) {
        return FALSE;
        }else{
        return TRUE; // TRUE => AUCUNE ADRESSE DONC c'est bon
        }
        exit();
    }
}


$connexion = getConnexionBD();
/* On se connecte la base de données pour verifier si l'email est pas déja utilisé,
si elle est pas utilisé, on envoie le formulaire a la page suivante
sinon on retourne sur la meme page.
*/

email_already_use($connexion);


    if(isset($_POST["ValiderFormInscription"]) && email_already_use_valide_FORM($connexion) == true ){
        $Nom = $_POST["Nom"];
        $Prenom = $_POST["Prenom"];
        $Email = $_POST["email"];
        $Pass = $_POST["MotDePasse"];        
    }

disconnectBDD($connexion);


?>