<?php

$title = "Film";
// include 'header.php';
var_dump($detailsFilm);
?>

<div class="film">
    <h1><?php echo $detailsFilm['titre'] ?></h1>
    <div class="details">
        <div class="infos">
            <p>Année : <?php echo $detailsFilm['date'] ?></p>
            <p>Durée : <?php echo $detailsFilm['duree'] ?> minutes</p>
        </div>
        <div class="affiche">
            <img src="assets/images/<?php echo $detailsFilm['affiche'] ?>" alt="">
        </div>
    </div>
    <div class="synopsis">
        <p><?php echo $detailsFilm['synopsis'] ?></p>
    </div>
</div>