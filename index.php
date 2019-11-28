<?php

if(isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
}

else {
    $page = 'Home';
}

$page = ucfirst($page);

include('Controllers/'.$page.'Controller.php');

// 1. ajouter à tous les liens la variable get redirect
// 2. cette variable get prend la valeur de $_SERVER['REQUEST_URI']
// 3. dans le contrôleur de connexion, dans le cas où on est connecté, le header Location prendra la valeur de la variable get redirect
