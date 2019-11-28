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
            $connexion = true;        
        }else{
            $connexion = false;
        };
    endforeach;    
    return [$connexion];
};

function ajouterUtilisateur($nom, $prenom, $email, $password){
    global $bdd;
    $ajoutUtilisateur = $bdd->prepare('INSERT INTO utilisateurs (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password);');
    $ajoutUtilisateur->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'password' => $password
    ]);
    $last_id = $bdd->query('SELECT * FROM utilisateurs where id_utilisateurs = LAST_INSERT_ID();');
    // var_dump($last_id);
    $result = $last_id->fetch(PDO::FETCH_ASSOC);
    
    $_SESSION['idUser'] = $result['id_utilisateurs'];
    $_SESSION['prenomUser'] = $prenom;
  
}

