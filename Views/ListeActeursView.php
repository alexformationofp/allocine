<?php
$title = 'Ciné 117 - Liste des acteurs';
include 'header.php';
?>
<div class="container pb-5 pt-3 pt-sm-5 fondgris">
        <div class="row justify-content-center">
            <h2>Belle brochette d'acteurs</h2>
        </div>
        <div class="row justify-content-center listeActeurs">
                <?php
                foreach ($listeActeurs as $acteur) :
                    $idActeur = $acteur['id_acteurs']; ?>
                    <a class="mb-1 m-sm-2" href="index.php?page=DetailActeur&idActeur=<?php echo $idActeur ?>">
                        <div class="miniActeur">
                            <img src="assets/images/<?php echo $acteur['image']?>" alt="">
                            <p><?php echo $acteur['prenom'] . ' ' . $acteur['nom'] ?></p>
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