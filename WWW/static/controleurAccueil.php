<?php 
/* Aprés la création de compte ou la connexion on gère la session */
    $connexion = getConnexionBD();

    if(isset($_POST["SOUMETTRE"])){

    /* Recuperer grace au echo dans le form précedent */
        $Nom=$_POST["nom"];
        $Prenom=$_POST["prenom"];
        $Email=$_POST['email'];
        $Password=$_POST['motDePasse'];
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
        mysqli_query($connexion,"INSERT INTO rvl_table.compte(personne_id,compte_password,compte_validity) VALUES (\"$ID[0]\",\"$Password\",0)");
           
    }

function connexion_session(){
    $connexion = getConnexionBD();
    $ID_S = $_SESSION['id_session'];

    
    $res_Nom = mysqli_query($connexion,"SELECT personne_nom FROM rvl_table.personne WHERE personne_id=\"$ID_S\" ");
    $Nom = mysqli_fetch_array($res_Nom);
    $_SESSION["Nom"] = $Nom[0];
    
    $res_Email = mysqli_query($connexion,"SELECT personne_email FROM rvl_table.personne WHERE personne_id=\"$ID_S\" ");
    $Email = mysqli_fetch_array($res_Email);
    $_SESSION["Email"] = $Email[0];
    
    $res_Prenom = mysqli_query($connexion,"SELECT personne_prenom FROM rvl_table.personne WHERE personne_id=\"$ID_S\" ");
    $Prenom = mysqli_fetch_array($res_Prenom);
    $_SESSION["Prenom"] = $Prenom[0];

    $res_Tel = mysqli_query($connexion,"SELECT personne_telephone FROM rvl_table.personne WHERE personne_id=\"$ID_S\" ");
    $Tel = mysqli_fetch_array($res_Tel);
    $_SESSION["Telephone"] = $Tel[0];

    $res_Adresse = mysqli_query($connexion,"SELECT personne_adresse FROM rvl_table.personne WHERE personne_id=\"$ID_S\" ");
    $Adresse = mysqli_fetch_array($res_Adresse);
    $_SESSION["Adresse"] = $Adresse[0];

    $res_CodePostal = mysqli_query($connexion,"SELECT personne_codePostal FROM rvl_table.personne WHERE personne_id=\"$ID_S\" ");
    $CodePostal = mysqli_fetch_array($res_CodePostal);
    $_SESSION["Code_Postal"] = $CodePostal[0];   
    
    $res_Ville = mysqli_query($connexion,"SELECT personne_ville FROM rvl_table.personne WHERE personne_id=\"$ID_S\" ");
    $Ville = mysqli_fetch_array($res_Ville);
    $_SESSION["Ville"] = $Ville[0];

    $res_TypeUsager = mysqli_query($connexion,"SELECT personne_type_usager FROM rvl_table.personne WHERE personne_id=\"$ID_S\" ");
    $TypeUsager = mysqli_fetch_array($res_TypeUsager);
    $_SESSION["Type_Usager"] = $TypeUsager[0];

    disconnectBDD($connexion);
}

disconnectBDD($connexion);

?>