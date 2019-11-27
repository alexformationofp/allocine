<?php
$title = "Ciné-117: les réalisateurs";
include 'header.php';

?>
<div id="main" class="">
    <div class="container">
        <div class="row justify-content-center">
            <h1>Les Réalisateurs</h1>
        </div>
        <div class="row justify-content-center">
            <?php
            foreach ($detailsReal as $real) :
                $idReal = $real['id_realisateurs'];
                ?>
                <div class="col-sm-6 col-md-4">
                    <a href="index.php?page=DetailRealisateur&idReal= <?php echo $idReal ?>">
                        <div class="card">
                            <img src="assets/images/<?php echo $real['image']  ?>" class="card-img-top photoReal" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $real['nom'] ?> <?php echo $real['prenom'] ?></h5>
                                <p>Nationalité : <?php echo $real['nationalite'] ?></p>
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