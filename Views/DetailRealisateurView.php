<?php
$title = "Ciné-117: Les Détails";
include 'header.php';
?>

<div class="container pb-5 pt-3 pt-sm-5 fondgris">
    <div class="row no-gutters justify-content-between detailFilm">    
            <div class="col-sm-4">
                <img src="assets/images/<?php echo $details['image']  ?>" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6">
                <h2 class=""><?php echo $details['prenom'] ?> <?php echo $details['nom'] ?></h2>
                <p>Nationalité : <?php echo $details['nationalite'] ?></p>
                <p><?php echo $details['details_realisateurs'] ?></p>
                <p>Il a réalisé (entre autes):</p>
                <div class="filmsActeur">
                <?php
                    foreach ($films as $filmReal) :
                         $idFilm = $filmReal['id_films'];
                ?>
                     <a href="index.php?page=film&idFilm=<?php echo $idFilm ?>">
                        <div class="carteFilm">
                            <img src="assets/images/<?php echo $filmReal['affiche'] ?>" alt="" class="card-img-top">
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
    </div>
</div>
<?php
include 'footer.php';
?>