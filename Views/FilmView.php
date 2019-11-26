<?php

$title = "Ciné-117 : détails sur ".$detailsFilm['titre'];
include 'header.php';

?>

<div class="film">
    <h1><?php echo $detailsFilm['titre'] ?></h1>
    <div class="details">
        <div class="infos">
            <p>Réalisé par <?php foreach($realisateursFilm as $realisateur) : echo $realisateur['nom']; echo " ".$realisateur['prenom']; endforeach; ?></p>
            <p>Genres : <?php foreach($genresFilm as $genre) : echo " ".$genre['type']; endforeach; ?></p>  
            <p>Année : <?php echo $detailsFilm['date'] ?></p>
            <p>Durée : <?php echo $detailsFilm['duree'] ?> minutes</p>
            <p>Avec :</p>
            <ul>
                <?php 
                foreach($acteursFilm as $acteur) :
                    echo ('<li>'.$acteur['prenom'].' '.$acteur['nom'].'</li>');
                endforeach;
            ?>
            </ul>
        </div>
        <div class="affiche">
            <img src="assets/images/<?php echo $detailsFilm['affiche'] ?>" alt="">
        </div>
    </div>
    <div class="synopsis">
        <p><?php echo $detailsFilm['synopsis'] ?></p>
    </div>
</div>