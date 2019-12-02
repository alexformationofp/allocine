<?php
require('Models/Connexion.php');


function listerActeurs(){
    global $bdd;
    $listeActeurs = $bdd->prepare('SELECT * FROM acteurs ORDER BY nom');
    $listeActeurs->execute();
    $listeActeurs = $listeActeurs->fetchAll();
    return $listeActeurs;
    
};