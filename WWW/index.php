<?php

session_start(); // TODO : gérer les sessions

require('inc/constantes.php'); // Declaration de constante pour la BDD ..
require('inc/routes.php'); // Routes de dossier//fichiers 
require('inc/connexionBDD.php');  // Fonctions de connexion à la BDD



if ( isset($_GET['page']) ){
    $nomPage = $_GET['page'];

    if ( isset($routes[$nomPage]) ) {

        $controleur = $routes[$nomPage]['controleur'];
        $vue = $routes[$nomPage]['vue'];
        include('controleur/'.$controleur.'.php');
        include('vue/'.$vue.'.php');
    } else {
        include('static/accueil.php');
    }
    
} else {
    include('static/accueil.php');
}


?>