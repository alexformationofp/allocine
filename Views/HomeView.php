<?php

$title = "Ciné 117 - Accueil";
include 'header.php';

?>



    <div class="container fondgris homeview pt-3 pt-sm-5 pb-2">
        <div class="row justify-content-center">
            <h2 class="titreFilms mb-2 mb-sm-4">Des films bien sympa !</h2>
        </div>
        <div class="row justify-content-center mb-3 mt-3">
            <?php
            foreach ($listeFilms as $film) :
                $idFilm = $film['id_films'];
                ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="index.php?page=Film&idFilm=<?php echo $idFilm ?>">
                        <div class="carteFilm">
                            <img src="assets/images/<?php echo $film['affiche'] ?>" alt="">
                            <div class="titreFilm">
                                <h5><?php echo $film['titre'] ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>

<?php

// include 'contact-form.php';

include 'footer.php';
?>