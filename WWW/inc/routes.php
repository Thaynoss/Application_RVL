<?php

//Les routes servent à simplifier l'appel des pages php

$routes = array(
    'CreerCompte' => array('controleur' =>'controleurCreerCompte', 'vue' =>'vueCreerCompte'),
    'CreerProfile' => array('controleur' => 'controleurCreerProfile', 'vue' => 'vueCreerProfile'),
    'VoirProfil' => array('controleur' => 'ControleurVoirProfile','vue' => 'vueVoirProfile'),
    'Connexion' => array('controleur' =>'controleurConnexion', 'vue' => 'vueConnexion'),
    'ModifierInformations' => array('controleur' => 'ControleurModifierPersonne','vue' => 'vueModifierPersonne'),
    'Devis' => array('controleur' => 'ControleurDevis','vue' => 'vueDevis'),
    'CreerDevis' => array('controleur' => 'ControleurCreerDevis','vue' =>'vueCreerDevis'),
    'ModifierDevis' => array('controleur' => 'ControleurModifierDevis','vue' => 'vueModifierDevis'),
    'Chantier' => array('controleur' => 'ControleurCreerChantier','vue' => 'vueCreerChantier')
);

?>