<?php

$title = "Ciné-117 : détails sur " . $detailsFilm['titre'];
include 'header.php';

?>

<div class="container pt-sm-5 fondgris">
    <div class="row justify-content-center pb-sm-3">
        
    </div>
    <div class="row mb-2">
        
        <div class="col-md-6 align-self-center presentationFilm">
            <h2><?php echo $detailsFilm['titre'] ?></h2>
            <p>Réalisé par <?php foreach ($realisateursFilm as $realisateur) :
                                $idReal = $realisateur['id_realisateurs']
                                ?>
                    <a href="index.php?page=DetailRealisateur&idReal=<?php echo $idReal ?>"><?php
                                                                                                echo $realisateur['prenom'];
                                                                                                echo " " . $realisateur['nom'];
                                                                                                ?></a></p><?php
                                                                                                            endforeach; ?>
        <p>Genres : <?php foreach ($genresFilm as $genre) : echo " " . $genre['type'];
                    endforeach; ?></p>
        <p>Année : <?php echo $detailsFilm['date'] ?></p>
        <p>Durée : <?php echo $detailsFilm['duree'] ?> minutes</p>
        <p>Avec :</p>
        <ul>
            <?php
            foreach ($acteursFilm as $acteur) :
                $idActeur = $acteur['id_acteurs'];
                echo ('<li><a class="listenone" href="index.php?page=DetailActeur&idActeur=' . $idActeur . '">' . $acteur['prenom'] . ' ' . $acteur['nom'] . '</a></li>');
            endforeach;
            ?>
        </ul>
        </div>
        <div class="col-md-6">
            <img src="assets/images/<?php echo $detailsFilm['affiche'] ?>" alt="">
        </div>
    </div>
    <div class="row synopsis mx-2 mt-4 mb-3 ">
        <p class="titleSynopsis">Synopsis :</p>
        <p><?php echo $detailsFilm['synopsis'] ?></p>
    </div>
    <div class="hrFilm"></div>
    <!-- Formulaire Commentaire -->
    <div class="row m-2">
        <?php
        if (isset($_SESSION['idUser'])) { ?>
            <form action="index.php?page=Film&idFilm=<?php echo $idFilm ?>" method="post">
                <label for="commentaire" class="d-flex align-items-start">Votre commentaire :</label>
                <textarea name="commentaire" id="commentaire" cols="30" rows="2"></textarea>
                <label for="note" class="notationFilm">Votre note :</label>
                <select name="note" id="note">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="submit" value="Envoyer">
            </form>
        <?php  } else {
            echo '<a href="index.php?page=ConnexionUser&provenance=' . $idFilm . '">Pour écrire un commentaire, connectez-vous</a>';
        }
        ?>
    </div>
    <!-- Affichage Commentaire -->
    <div class="row commentaires">
        <?php
        foreach ($commentaires as $commentaire) : ?>
            <div class="commentaire m-4">
                <div class="row interlineComs">
                    <div class="col-md-6">
                        <p>Pseudo : <?php echo $commentaire['prenom'] ?></p>
                    </div>
                    <div class="col-md-5">
                        <p>Note : <?php echo $commentaire['note'] ?></p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <p class="dateCommentaire"><?php echo $commentaire['date'] ?></p>
                </div>
                <div class="row no-gutters">
                    <?php echo $commentaire['contenu'] ?>
                </div>
            </div>
        <?php endforeach;
        ?>
    </div>

</div>
<?php

// include 'contact-form.php';

include 'footer.php';
?>