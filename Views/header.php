<?php
if (isset($_SESSION['idUser'])) {
    $prenomUser = $_SESSION['prenomUser'];
    $idUser = $_SESSION['idUser'];
    $ongletConnexion = 'Déconnexion';
    // $ongletConnexion = 'Hello '.$prenomUser; 
} else {
    $ongletConnexion = 'Connexion';
};

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <!-- <link rel="manifest" href="manifest.json"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/scss/style.css">
    <link rel="shortcut icon" href="assets/img/logo.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/34e66b6ec8.js" crossorigin="anonymous"></script>

</head>

<body>

    <header id="header" class="">
        <div class="container fondgris mb-2 p-0">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                    <h1>Allociné 117</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-center" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="index.php?page=ListeRealisateurs">Réalisateurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="index.php?page=ListeActeurs">Acteurs</a>
                        </li>
                        <?php if (isset($_SESSION['idUser'])) {
                            echo '<li class="nav-item"><a id="bonjour" class="nav-link text-center" href="">Hello ' . $prenomUser . ' !</a></li>';
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="index.php?page=ConnexionUser"><?php echo $ongletConnexion ?></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>