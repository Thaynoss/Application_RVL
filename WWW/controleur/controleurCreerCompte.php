<?php

function ValiderFormCompte(){

$connexion = getConnexionBD();

if(isset($_POST["VALIDER"])){

    $N = GetCompteNom();

    $P = GetComptePrenom();
    $E = GetCompteEmail();
    $Pa = GetComptePass();
    
    $Nom=$_POST["Nom"];
    $Prenom=$_POST["Prenom"];
    $Email=$_POST["Email"];
    $Pass=$_POST["MotDePasse"];
    //VALUES ( \"$Nom\" , \"$Prenom\" , \"$Adresse\" , \"$CodePostal\" , \"$Ville\" , \"$Email\" , \"$Telephone\" , \"$Type\" )" );


}
disconnectBDD($connexion);

}

function GetCompteNom(){
    if(isset($_POST["VALIDER"])){
        return $Nom=$_POST["Nom"];
    }
    //return $nom;
}

function GetComptePrenom(){
    if(isset($_POST["VALIDER"])){
        return $Prenom=$_POST["Prenom"];
    }
}

function GetCompteEmail(){
    if(isset($_POST["VALIDER"])){
        return $Email=$_POST["Email"];
    }
}

function GetComptePass(){
    if(isset($_POST["VALIDER"])){
        return $Pass=$_POST["MotDePasse"];
    }
}



?>