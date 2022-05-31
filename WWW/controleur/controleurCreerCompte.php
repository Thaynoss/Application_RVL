<?php

function ValiderFormCompte(){

    $connexion = getConnexionBD();
    if(isset($_POST["VALIDER"])){

        $Nom=$_POST["Nom"];
        $Prenom=$_POST["Prenom"];
        $Email=$_POST["Email"];
        $Pass=$_POST["MotDePasse"];

    }

disconnectBDD($connexion);

}



// TODO : a faire en JavaScript 
/*
function email_already_use($Email){

    if(isset($_POST["VALIDER"])){

        $connexion = getConnexionBD();

        $res_Email=mysqli_query($connexion,"SELECT personne_email FROM rvl_table.personne WHERE personne_email=\" $Email\" ");
        $Email = mysqli_fetch_array($res_Email);
        
        if(isset($Email[0])){
            echo "Email already used";
            return FALSE;
        }
        echo "Email not used";
        return TRUE;
        
        disconnectBDD($connexion);
    }
    
}*/

?>