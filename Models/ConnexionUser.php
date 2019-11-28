<?php

require('Models/connexion.php');

function verifierUtilisateur($email, $password){
    global $bdd;
    $listeUtilisateurs = $bdd->query('SELECT * FROM utilisateurs;');
    $listeUtilisateurs = $listeUtilisateurs->fetchAll();
    foreach ($listeUtilisateurs as $utilisateur) :
        if ($utilisateur['email']==$email && $utilisateur['password']==$password){
            $_SESSION['idUser'] = $utilisateur['id_utilisateurs'];
            $_SESSION['prenomUser'] = $utilisateur['prenom'];
            // header('Location: index.php');
            $connexion = true;
            
            
        }else{
            // header('Location: index.php?page=ConnexionUser');
            $connexion = false;
        };

    endforeach;    
    return [$connexion];
    // return $_SESSION['idUser'];
   
};

