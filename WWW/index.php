<?php

//$_GET pour changer les pages car on a pas de modification de données.


session_start();
require('inc/constantes.php');
require('inc/routes.php');
require('inc/connexionBDD.php');

if( isset($_GET['page']) ){
    $nomPage = $_GET['page'];

    if( isset($routes[$nomPage]) ) {

        $controleur = $routes[$nomPage]['controleur'];
        $vue = $routes[$nomPage]['vue'];
        include('controleur/'.$controleur.'.php');
        include('vue/'.$vue.'.php');
    }
    else {
        include('static/accueil.php');
    }
}
else {
    include('static/accueil.php');
}


?>