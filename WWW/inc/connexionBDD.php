<?php   

//Connexion à la BDD

function getConnexionBD(){
    $connexion = mysqli_connect(SERVEUR,UTILISATEUR,MOTDEPASSE,BDD);
    if( mysqli_connect_errno() == TRUE){
        printf("Echec de la connexion : %s\n", mysqli_connect_error() );
        exit();   
    }
    return $connexion;
}


function disconnectBDD($connexion){
    mysqli_close($connexion);
}

?>
