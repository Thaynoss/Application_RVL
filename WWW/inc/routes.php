<?php

//Les routes servent à simplifier l'appel des pages php

$routes = array(

    'Prestation' => array('controleur' => 'controleurPrestation', 'vue' => 'vuePrestation'),

    'Compte' => array('controleur' => 'controleurCompte', 'vue' => 'vueCompte'),
    
    'CreerCompte' => array('controleur' =>'controleurCreerCompte', 'vue' =>'vueCreerCompte'),
    'CreerProfile' => array('controleur' => 'controleurCreerProfile', 'vue' => 'vueCreerProfile'),
    'VoirProfil' => array('controleur' => 'ControleurVoirProfile','vue' => 'vueVoirProfile'),
    'Connexion' => array('controleur' =>'controleurConnexion', 'vue' => 'vueConnexion'),
    'ModifierInformations' => array('controleur' => 'controleurModifierPersonne','vue' => 'vueModifierPersonne'),

    'Devis' => array('controleur' => 'controleurDevis','vue' => 'vueDevis'),
    'CreerDevis' => array('controleur' => 'controleurCreerDevis','vue' =>'vueCreerDevis'),
    'ModifierDevis' => array('controleur' => 'ControleurModifierDevis','vue' => 'vueModifierDevis'),

    'Chantier' => array('controleur' => 'controleurCreerChantier','vue' => 'vueCreerChantier')
);

?>