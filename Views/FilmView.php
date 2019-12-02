<?php
$title = "Ciné-117 : détails sur " . $detailsFilm['titre'];
include 'header.php';
?>

<div class="container pb-5 pt-3 pt-sm-5 fondgris">
    <div class="row no-gutters detailFilm">
        <div class="col-sm-8 presentationFilm">
            <h2 class="pb-3"><?php echo $detailsFilm['titre'] ?></h2>
            <p>Réalisé par <?php foreach ($realisateursFilm as $realisateur) :
                                $idReal = $realisateur['id_realisateurs']
                                ?>
                    <a href="index.php?page=DetailRealisateur&idReal=<?php echo $idReal ?>"><b><?php
                                                                                                echo $realisateur['prenom'];
                                                                                                echo " " . $realisateur['nom'];
                                                                                                ?></b></a></p><?php
                                                                                                            endforeach; ?>
        <p>Genres : <b><?php foreach ($genresFilm as $genre) : echo " " . $genre['type'];
                    endforeach; ?></b></p>
        <p>Année : <?php echo $detailsFilm['date'] ?></p>
        <p>Durée : <?php echo $detailsFilm['duree'] ?> minutes</p>
        <p>Avec :</p>
        <ul>
            <?php
            foreach ($acteursFilm as $acteur) :
                $idActeur = $acteur['id_acteurs'];
                echo ('<li><a class="listenone" href="index.php?page=DetailActeur&idActeur=' . $idActeur . '"><b>' . $acteur['prenom'] . ' ' . $acteur['nom'] . '</b></a></li>');
            endforeach;
            ?>
        </ul>
        </div>
        <div class="col-sm-4">
            <img src="assets/images/<?php echo $detailsFilm['affiche'] ?>" alt="">
        </div>
    </div>
    <div class="row synopsis detailFilm">
        <p class="titleSynopsis">Synopsis :</p>
        <p class="text-justify"><?php echo $detailsFilm['synopsis'] ?></p>
    </div>

    <!-- Formulaire Commentaire -->

    <?php
    if (isset($_SESSION['idUser'])) { ?>
        <div class="row detailFilm ajoutCom mb-4">
            <form action="index.php?page=Film&idFilm=<?php echo $idFilm ?>" method="post">
                <label for="commentaire" class="d-flex align-items-start">Votre commentaire :</label>
                <textarea name="commentaire" id="commentaire" cols="100" rows="4"></textarea>

                <div class="divNote">
                    <p>Votre note :</p>
                    <div class="radio">
                        <input type="radio" id="note1" name="note" value="1">
                        <label for="note1">1</label>
                    </div>
                    <div class="radio">
                        <input type="radio" id="note1" name="note" value="2">
                        <label for="note2">2</label>
                    </div>
                    <div class="radio">
                        <input type="radio" id="note3" name="note" value="3">
                        <label for="note3">3</label>
                    </div>
                    <div class="radio">
                        <input type="radio" id="note4" name="note" value="4">
                        <label for="note4">4</label>
                    </div>
                    <div class="radio">
                        <input type="radio" id="note5" name="note" value="5" checked>
                        <label for="note5">5</label>
                    </div>
                </div>
                <input class="boutonConnect" type="submit" value="Envoyer">
            </form>
        </div>
    <?php  } else {
        echo '<div class="row detailFilm mb-4"><a class="boutonConnect" href="index.php?page=ConnexionUser&provenance=' . $idFilm . '">Pour écrire un commentaire, connectez-vous</a></div>';
    }
    ?>

    <!-- Affichage Commentaire -->
   
        <?php
        foreach ($commentaires as $commentaire) : ?>
            <div class="row detailFilm commentaires">           
                    <div class="row no-gutters justify-content-between w-100">
                        <div>
                             <p class="font-weight-bold"><?php echo $commentaire['prenom'] ?></p>
                            <p><?php for ($i=1; $i <= $commentaire['note']; $i++) { 
                                 echo '<i class="fas fa-star" style="color:yellow"></i>';
                                } ?></p>
                        </div>
                       
                        
                        <div class="dateCom">
                            <p class="dateCommentaire">Ajouté le <?php echo $commentaire['date']?></p>
                        </div>
                        
                    
                    </div>
                    <div class="row no-gutters">
                        <p class="text-justify mb-0"><?php echo $commentaire['contenu'] ?></p>
                    </div>
                
            </div>
        <?php endforeach;
        ?>
    

</div>
<?php
include 'footer.php';
?>