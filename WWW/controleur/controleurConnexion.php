<?php


// Appelé par l'utilisateur quand il se connecte à sa compte
function Connexion(){
    $connexion = getConnexionBD();
    if(isset($_POST["Connexion"])){

        
        $Email=$_POST["Email"];
        $Pass=$_POST["MotDePasse"];

        verifCompteExiste($Email,$Pass);

    }

disconnectBDD($connexion);

}


// Verifie si le compte existe : si l'email et le mot de passe on bien en commun l'ID de la personne
function verifCompteExiste($Email,$Pass){

    if(isset($_POST["Connexion"])){

        $connexion = getConnexionBD();

        if(isset( $_POST["MotDePasse"]) && isset($_POST["Email"]) ){ 

            $Get_ID_email=mysqli_query($connexion,"SELECT personne_id FROM rvl_table.personne WHERE personne_email=\" $Email\" ");
            $Get_ID_pass=mysqli_query($connexion,"SELECT personne_id FROM rvl_table.compte WHERE compte_password=\" $Pass\" ");
            try {
                    $Id_email=mysqli_fetch_array($Get_ID_email);
                    $Id_pass=mysqli_fetch_array($Get_ID_pass);

                    if($Id_email[0]==$Id_pass[0]){
                        echo "Connexion reussi !";
                    }
                    else{
                        throw new Exception('Adresse mail ou mot passe incorrecte,merci de réessayez.');
                    }
            } catch (\Throwable $th) {
                echo "Exception :", $th->getMessage();
            }
        }
        else{
            echo "Veuillez saisir l'adresse email et un mot de passe";
        }
        disconnectBDD($connexion);
    }
    
}

?>