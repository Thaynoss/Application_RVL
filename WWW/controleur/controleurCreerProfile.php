<?php

function ValiderForm(){

require("../WWW/controleur/controleurCreerCompte.php");
$connexion = getConnexionBD();

$Nom = GetCompteNom();
$Prenom = GetComptePrenom();
$Email = GetCompteEmail();
$Password = GetComptePass();

if(isset($_POST["SOUMETTRE"])){

    $Adresse=$_POST["Adresse"];
    $CodePostal=$_POST["CodePostal"];
    $Ville=$_POST["Ville"];
    $Telephone=$_POST["Telephone"];
    $Type=$_POST["Usager"];


    mysqli_query($connexion,"INSERT INTO rvl_table.personne(personne_nom,personne_prenom,personne_addresse,personne_codePostal,personne_ville,personne_email,personne_telephone,personne_type_usager)
                    VALUES ( \"$Nom\" , \"$Prenom\" , \"$Adresse\" , \"$CodePostal\" , \"$Ville\" , \"$Email\" , \"$Telephone\" , \"$Type\" )" );
    mysqli_query($connexion,"INSERT INTO rvl_table.compte(compte_password) VALUES (\"$Password\")");

    echo $Nom;
    echo "Profile crée félicitation";
}


disconnectBDD($connexion);
}

?>