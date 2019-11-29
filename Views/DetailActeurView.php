<?php
$title = "Ciné-117 : détails sur " . $detailsActeur['prenom'] . ' ' . $detailsActeur['nom'];
include 'header.php';
?>
<div id="main">
    <div class="container pt-2 pt-sm-5 pb-3 fondgris">

        <div class="row mb-2 mt-2">
            <div class="col-md-4">
                <img src="assets/images/<?php echo $detailsActeur['image'] ?>" class="img-fluid" alt="Photo acteur">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <h2><?php echo $detailsActeur['prenom'] . ' ' . $detailsActeur['nom'] ?></h2>
                </div>
                <div class="row">
                    <p>Nationalité : <?php echo $detailsActeur['nationalite'] ?></p>
                </div>
                <div class="row">
                    <?php
                    foreach ($listeFilms as $film) :
                        $idFilm = $film['id_films'];
                        ?>
                        <div class="col-md-4">
                            <a href="index.php?page=Film&idFilm=<?php echo $idFilm ?>">
                                <div class="carteDetailActeur">
                                    <img src="assets/images/<?php echo $film['affiche'] ?>" alt="affiche">
                                    <div class="titreDetailActeur">
                                        <h5 class=><?php echo $film['titre'] ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    endforeach;
                    ?>


                </div>
            </div>

        </div>

    </div>
</div>