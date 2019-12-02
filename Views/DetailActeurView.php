<?php
$title = "Ciné-117 : détails sur " . $detailsActeur['prenom'] . ' ' . $detailsActeur['nom'];
include 'header.php';
?>

<div class="container pb-5 pt-3 pt-sm-5 fondgris">
    <div class="row no-gutters justify-content-between detailFilm">
        <div class="col-md-4">
            <img src="assets/images/<?php echo $detailsActeur['image'] ?>" class="img-fluid" alt="Photo acteur">
        </div>
        <div class="col-md-6">
            <h2><?php echo $detailsActeur['prenom'] . ' ' . $detailsActeur['nom'] ?></h2>
            <p>Nationalité : <?php echo $detailsActeur['nationalite'] ?></p>  
            <p>A joué dans :</p>
            <div class="filmsActeur">  
                <?php
                foreach ($listeFilms as $film) :
                    $idFilm = $film['id_films'];
                    ?>
                    <a href="index.php?page=Film&idFilm=<?php echo $idFilm ?>">
                        <div class="carteFilm">
                            <img src="assets/images/<?php echo $film['affiche'] ?>" alt="affiche">                       
                        </div>
                    </a>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>