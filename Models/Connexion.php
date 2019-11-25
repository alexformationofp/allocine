<?php

require('env.php');
$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
$bdd = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, $options);

try {
    $bdd = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
};