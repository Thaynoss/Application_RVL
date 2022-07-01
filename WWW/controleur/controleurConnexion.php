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

            $Get_ID_via_email=mysqli_query($connexion,"SELECT personne_id FROM rvl_table.personne WHERE personne_email=\" $Email\" ");
            $Id_email=mysqli_fetch_array($Get_ID_via_email);

            $Get_ID_pass=mysqli_query($connexion,"SELECT personne_id FROM rvl_table.compte WHERE compte_password=\" $Pass\" AND compte_id=\" $Id_email[0]\" ");
            try {
                    $Id_pass=mysqli_fetch_array($Get_ID_pass);

                    if($Id_email[0]==$Id_pass[0]){
                        echo "Connexion reussi, redirection vers l'accueil..";
                        init_ID_session($Id_email[0],$Id_pass[0]);
                    }
                    else{
                        throw new Exception('Adresse mail ou mot passe incorrecte,merci de réessayez.');
                    }
            } catch (\Throwable $th) {
                echo "Exception :", $th->getMessage();
            }
        }
        else{
            echo "Veuillez saisir une adresse email et un mot de passe";
        }
        disconnectBDD($connexion);
    }
    
}

function init_ID_session($Id_email,$Id_pass){

    $_SESSION['id_session'] = $Id_email;    
    header("Refresh:2; url=index.php");
}


?>