<?php
    
$routes = array(
    'CreerCompte' => array('controleur' =>'controleurCreerCompte', 'vue' =>'vueCreerCompte'),
    'CreerProfile' => array('controleur' => 'controleurCreerProfile', 'vue' => 'vueCreerProfile'),
    'VoirProfil' => array('controleur' => 'ControleurVoirProfile','vue' => 'vueVoirProfile'),
    'Compte' => array('controleur' => 'ControleurCreerCompte','vue' => 'vueCreerCompte'),
    'ModifierInformations' => array('controleur' => 'ControleurModifierPersonne','vue' => 'vueModifierPersonne'),
    'Devis' => array('controleur' => 'ControleurDevis','vue' => 'vueDevis'),
    'CreerDevis' => array('controleur' => 'ControleurCreerDevis','vue' =>'vueCreerDevis'),
    'ModifierDevis' => array('controleur' => 'ControleurModifierDevis','vue' => 'vueModifierDevis'),
    'Chantier' => array('controleur' => 'ControleurCreerChantier','vue' => 'vueCreerChantier')
);

?>