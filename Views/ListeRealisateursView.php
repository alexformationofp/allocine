<?php
$title = "Ciné-117: les réalisateurs";
include 'header.php';
?>
    <div class="container pt-2 pt-sm-5 fondgris">
        <div class="row justify-content-center">
            <h2>Les Réalisateurs</h2>
        </div>
        <div class="row justify-content-center listeActeurs">
            <?php
            foreach ($detailsReal as $real) :
                $idReal = $real['id_realisateurs'];?>
                    <a class="mb-1 m-sm-2" href="index.php?page=DetailRealisateur&idReal=<?php echo $idReal ?>">
                        <div class="miniActeur">
                            <img src="assets/images/<?php echo $real['image']  ?>"  alt="">
                            <p><?php echo $real['prenom'] ?> <?php echo $real['nom'] ?></p>
                        </div>
                    </a>       
            <?php
            endforeach;
            ?>
        </div>
    </div>
<?php

// include 'contact-form.php';

include 'footer.php';
?>