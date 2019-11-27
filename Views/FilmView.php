<?php

$title = "Ciné-117 : détails sur " . $detailsFilm['titre'];
include 'header.php';

?>

<div class="container">
    <div class="row justify-content-center">
        <h2><?php echo $detailsFilm['titre'] ?></h2>       
    </div>
  
    <div class="row mb-2">
        <div class="col-md-6">
            <p>Réalisé par <?php foreach ($realisateursFilm as $realisateur) : echo $realisateur['nom'];
                                echo " " . $realisateur['prenom'];
                            endforeach; ?></p>
            <p>Genres : <?php foreach ($genresFilm as $genre) : echo " " . $genre['type'];
                        endforeach; ?></p>
            <p>Année : <?php echo $detailsFilm['date'] ?></p>
            <p>Durée : <?php echo $detailsFilm['duree'] ?> minutes</p>
            <p>Avec :</p>
            <ul>
                <?php
                foreach ($acteursFilm as $acteur) :
                    echo ('<li>' . $acteur['prenom'] . ' ' . $acteur['nom'] . '</li>');
                endforeach;
                ?>
            </ul>
        </div>
        <div class="col-md-6">
            <img src="assets/images/<?php echo $detailsFilm['affiche'] ?>" alt="">
        </div>
    </div>
    <div class="row synopsis">
        <p><?php echo $detailsFilm['synopsis'] ?></p>
    </div>
</div>
<?php

// include 'contact-form.php';

include 'footer.php';
?>