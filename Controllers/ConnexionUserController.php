<?php
session_start();
require('Models/ConnexionUser.php');
if (isset($_GET['provenance'])){
    $provenance = $_GET['provenance'];
}
else{
    $provenance = false;
}
if (isset($_POST['emailInput'])){
    $emailInput = $_POST['emailInput'];
    $passwordInput = $_POST['passwordInput'];
    $connexion = verifierUtilisateur($emailInput, $passwordInput);
    if ($connexion[0] == true){
            if(isset($provenance) && $provenance != false){
                 header('Location: index.php?page=Film&idFilm='.$provenance);
            }
            else{
                header('Location: index.php');
            }
    }else{
        header('Location: index.php?page=ConnexionUser&erreur');
    }
    
}else if (isset($_SESSION['idUser'])){
    $_SESSION=[];
    session_destroy(); 
    header('Location:index.php');
}else{
require('Views/ConnexionUserView.php');
};