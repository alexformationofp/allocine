<?php

$title = "Ciné 117 - Accueil";
include 'header.php';

?>

<div id="main" class="">

    <div class="container">
        <div class="row justify-content-center">
            <h2> Listes des Films</h2>
        </div>
        <div class="row justify-content-center m-2">
        <?php
        foreach($listeFilms as $film) :
        $idFilm = $film['id_films'];
        ?>
        <div class="col-sm-6 col-md-4">
            <a href="index.php?page=Film&idFilm=<?php echo $idFilm ?>" target="_blank">
                <div class="card">
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

?>



// include 'contact-form.php';

include 'footer.php';