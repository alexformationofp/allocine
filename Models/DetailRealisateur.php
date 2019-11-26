<?php 

require('Models/Connexion.php');

function details(){
    global $bdd;
    $details =$bdd->prepare(SELECT * FROM);
    $details->execute();
    $details = $details->fetchAll();
    return $details;
}