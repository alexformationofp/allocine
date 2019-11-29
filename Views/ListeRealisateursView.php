<?php
$title = "Ciné-117: les réalisateurs";
include 'header.php';

?>
<div id="main" class="">
    <div class="container pt-2 pt-sm-5 fondgris">
        <div class="row justify-content-center">
            <h2 class="mb-4">Les Réalisateurs</h2>
        </div>
        <div class="row justify-content-center mt-3 mb-3">
            <?php
            foreach ($detailsReal as $real) :
                $idReal = $real['id_realisateurs'];
                ?>
                <div class="col-sm-6 col-md-4 m-3">
                    <a href="index.php?page=DetailRealisateur&idReal=<?php echo $idReal ?>">
                        <div class="carteReal">
                            <img src="assets/images/<?php echo $real['image']  ?>"  alt="">
                            <div class="titreReal">
                                <h5><?php echo $real['prenom'] ?> <?php echo $real['nom'] ?></h5>
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