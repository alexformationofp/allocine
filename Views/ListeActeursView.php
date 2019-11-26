<?php

$title = 'Ciné 117 - Liste des acteurs';
include 'header.php';

?>

<div id="main">
    <div class="container">
        <div class="row justify-content-center">
            <h2>Liste des acteurs</h2>
        </div>
        <div class="row justify-content-center">
            <ul>
                <?php
                    foreach ($listeActeurs as $acteur):
                    $idActeur = $acteur['id_acteurs']; ?>
                    <li><a href="index.php?page=acteur&idActeur=<?php echo $idActeur ?>"><?php echo $acteur['prenom'].' '.$acteur['nom'] ?></a></li>
                <?php
                endforeach;
                ?>
            </ul>
        </div>
    </div>
</div>