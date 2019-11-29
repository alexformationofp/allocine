<?php
$title = "Ciné-117: Les Détails";
include 'header.php';

?>
<div id="main" class="">
<div class="container pt-2 pt-sm-5 pb-sm-4 fondgris">
        <div class="row justify-content-center pb-4">
            <h1>Les Détails</h1>
        </div>
        <div class="row justify-content-center">
            <?php
            foreach ($details as $detailsRealisateurs):
                $idDetails = $detailsRealisateurs['id_realisateurs'];
            ?>
            <div class="col-md-4">
            <img src="assets/images/<?php echo $detailsRealisateurs['image']  ?>" class="img-fluid" alt="">

            </div>

            <div class="col-md-4">
                <div class="row">
                <h5 class=""><?php echo $detailsRealisateurs['nom'] ?> <?php echo $detailsRealisateurs['prenom'] ?></h5>
                </div>
                <div class="row">
                <p>Nationalité : <?php echo $detailsRealisateurs['nationalite'] ?></p>
                </div>
                <div class="row">
                <p>Détails : <?php echo $detailsRealisateurs ['details_realisateurs'] ?></p>
                </div>
            </div>  
            <?php
            endforeach;
            ?>
        </div>
        <div class="row pt-3 pt-sm-4">
            <?php 
            foreach($films as $filmReal) : 
                $idFilm = $filmReal['id_films'];
            ?>
            <div class="col-md-4">
                <a href="index.php?page=film&idFilm=<?php echo $idFilm ?>">
                    <div class="carteDetailReal">
                        <img src="assets/images/<?php echo $filmReal['affiche'] ?>"  alt="" class="card-img-top">
                        <div class="titreDetailReal">
                            <h5>
                                <?php echo $filmReal['titre'] ?>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
<?php

// include 'contact-form.php';

include 'footer.php';
?>