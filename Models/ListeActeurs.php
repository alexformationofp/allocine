<?php
require('Models/Connexion.php');


function listerActeurs(){
    global $bdd;
    $listeActeurs = $bdd->prepare('SELECT * FROM acteurs');
    $listeActeurs->execute();
    $listeActeurs = $listeActeurs->fetchAll();
    return $listeActeurs;
    
};