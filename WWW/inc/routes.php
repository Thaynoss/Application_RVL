<?php

//Les routes servent à simplifier l'appel des pages php

$routes = array(

    'Prestation' => array('controleur' => 'controleurPrestation', 'vue' => 'vuePrestation'),

    'Compte' => array('controleur' => 'controleurCompte', 'vue' => 'vueCompte'),
    
    'CreerCompte' => array('controleur' =>'controleurCreerCompte', 'vue' =>'vueCreerCompte'),
    'CreerProfile' => array('controleur' => 'controleurCreerProfile', 'vue' => 'vueCreerProfile'),
    
    'Connexion' => array('controleur' =>'controleurConnexion', 'vue' => 'vueConnexion'),
    'Profile' => array('controleur' => 'ControleurProfile','vue' => 'vueProfile'),

    'Devis' => array('controleur' => 'controleurDevis','vue' => 'vueDevis'),
    'CreerDevis' => array('controleur' => 'controleurCreerDevis','vue' =>'vueCreerDevis'),
    'ModifierDevis' => array('controleur' => 'ControleurModifierDevis','vue' => 'vueModifierDevis'),

    'Chantier' => array('controleur' => 'controleurCreerChantier','vue' => 'vueCreerChantier')
);

?>