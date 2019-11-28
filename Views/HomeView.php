<?php

$title = "Ciné 117 - Accueil";
include 'header.php';

?>

<div id="main" class="">

    <div class="container fondgris pt-5 pb-2">
        <div class="row justify-content-center">
            <h2 class="titreFilms mb-4"> Listes des Films</h2>
        </div>
        <div class="row justify-content-center mb-3 mt-3">
            <?php
            foreach ($listeFilms as $film) :
                $idFilm = $film['id_films'];
                ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a href="index.php?page=Film&idFilm=<?php echo $idFilm ?>">
                        <div class="card m-2">
                            <img src="assets/images/<?php echo $film['affiche'] ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $film['titre'] ?></h5>
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
<?php

// include 'contact-form.php';

include 'footer.php';
?>