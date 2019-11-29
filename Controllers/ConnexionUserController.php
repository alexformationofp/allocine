<?php
session_start();
require('Models/ConnexionUser.php');
if (isset($_GET['provenance'])){
    $provenance = $_GET['provenance'];
}
else{
    $provenance = false;
};



if (isset($_POST['emailInput'])){
    $emailInput = $_POST['emailInput'];
    $passwordInput = $_POST['passwordInput'];
    $connexion = verifierUtilisateur($emailInput, $passwordInput);
    if ($connexion == true){
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
};

if (isset($_POST['nouveauNom']) && !isset($_SESSION['idUser'])){
    $_SESSION=[];
    $nom = $_POST['nouveauNom'];
    $prenom = $_POST['nouveauPrenom'];
    $email = $_POST['nouveauEmail'];
    $password = $_POST['nouveauPassword'];
    $last_id = ajouterUtilisateur($nom, $prenom, $email, $password);
    var_dump($last_id);
    var_dump($prenom);
    header('Location:index.php');

    // if (isset($_SESSION['idUser']) && isset($_SESSION['prenomUser'])){
    //      header('location:index.php');
    // }else{

    // }
   
};
require('Views/ConnexionUserView.php');