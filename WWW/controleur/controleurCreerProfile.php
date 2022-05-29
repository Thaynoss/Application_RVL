<?php

function ValiderForm(){

    $connexion = getConnexionBD();
    
    if(isset($_POST["SOUMETTRE"])){

    /* Recuperer grace au echo dans le form précedent */
        $Nom=$_POST['Nom'];
        $Prenom=$_POST['Prenom'];
        $Email=$_POST['Email'];
        $Password=$_POST['MotDePasse'];
    /**/

        $Adresse=$_POST["Adresse"];
        $CodePostal=$_POST["CodePostal"];
        $Ville=$_POST["Ville"];
        $Telephone=$_POST["Telephone"];
        $Type=$_POST["Usager"];

    
        mysqli_query($connexion,"INSERT INTO rvl_table.personne(personne_nom,personne_prenom,personne_addresse,personne_codePostal,personne_ville,personne_email,personne_telephone,personne_type_usager)
                    VALUES ( \"$Nom\" , \"$Prenom\" , \"$Adresse\" , \"$CodePostal\" , \"$Ville\" , \"$Email\" , \"$Telephone\" , \"$Type\" )" );
    
        $res_ID=mysqli_query($connexion,"SELECT personne_id FROM rvl_table.personne WHERE personne_email=\"$Email\" AND personne_Telephone=\"$Telephone\" ");
        $ID = mysqli_fetch_array($res_ID);
        mysqli_query($connexion,"INSERT INTO rvl_table.compte(personne_id,compte_password) VALUES (\"$ID[0]\",\"$Password\")");

        echo "Profile crée félicitation";
    }

disconnectBDD($connexion);
}

?>