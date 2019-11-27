<?php
$title = "Ciné-117 : détails sur " . $detailsActeur['prenom'].' '.$detailsActeur['nom'];
include 'header.php';
?>

<div class="container">
   
    <div class="row mb-2 mt-2">
        <div class="col-md-4">
            <img src="assets/images/<?php echo $detailsActeur['image'] ?>" class="img-fluid" alt="Photo acteur">
        </div>
        <div class="col-md-8">
            <div class="row">
                <h2><?php echo $detailsActeur['prenom'].' '.$detailsActeur['nom'] ?></h2> 
            </div>
            <div class="row">
                 <p>Nationalité : <?php echo $detailsActeur['nationalite'] ?></p>
            </div>        
            <div class="row">
                <?php
                foreach($listeFilms as $film) :
                $idFilm = $film['id_films'];
                ?>
                <div class="col-md-4">
                    <a href="index.php?page=Film&idFilm=<?php echo $idFilm ?>">
                        <div class="card">
                            <img src="assets/images/<?php echo $film['affiche'] ?>" class="card-img-top" alt="affiche">
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
   
</div>