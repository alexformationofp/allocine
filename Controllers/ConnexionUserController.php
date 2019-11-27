<?php
require('Models/ConnexionUser.php');

if (isset($_POST['emailInput'])){
    $emailInput = $_POST['emailInput'];
    $passwordInput = $_POST['passwordInput'];
    verifierUtilisateur($emailInput, $passwordInput);
}

require('Views/ConnexionUserView.php');