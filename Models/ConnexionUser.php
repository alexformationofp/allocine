<?php
session_start();
require('Models/connexion.php');

function verifierUtilisateur($email, $password){
    global $bdd;
    $listeUtilisateurs = $bdd->query('SELECT * FROM utilisateurs;');
    $listeUtilisateurs = $listeUtilisateurs->fetchAll();
    foreach ($listeUtilisateurs as $utilisateur) :
        if ($utilisateur['email']==$email && $utilisateur['password']==$password){
            $_SESSION['idUser'] = $utilisateur['id_utilisateurs'];
            $_SESSION['prenomUser'] = $utilisateur['prenom'];
            header('Location: index.php');
        };
    endforeach;
};