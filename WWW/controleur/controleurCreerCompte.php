<?php

function ValiderFormCompte(){
    email_already_use();
   $connexion = getConnexionBD();/*
    if(isset($_POST["ValiderFormInscription"])){
        email_already_use();
        $Nom=$_POST["Nom"];
        $Prenom=$_POST["Prenom"];
        $Email=$_POST["email"];
        $Pass=$_POST["MotDePasse"];
        email_already_use();
    }*/

//disconnectBDD($connexion);

}

email_already_use();

// TODO : a faire en JavaScript 
function email_already_use(){
    $connexion = getConnexionBD();

    if (isset($_POST['email_check'])|| isset($_POST['ValiderFormInscription'])) {
        $email = $_POST["email"];
        
        $sql = "SELECT * FROM rvl_table.personne WHERE personne_email=\" $email\" ";
        $results = mysqli_query($connexion, $sql);
        
        if (mysqli_num_rows($results) > 0) {
        echo "taken";	
        }else{
        echo "not_taken";
        }
        exit();
    }
    disconnectBDD($connexion);
}
?>