<?php

$title = "Ciné 117 - Ajouter un film";
include 'header.php';
if (isset($last_id)) { 
?>
    <h2>Renseignez les détails de </h2>
    <form action="?page=AjoutFilm" method="post">
        <input type="hidden" name="last_id" value="<?php echo $last_id ?>">
        <h3>Acteurs principaux</h3>
        <label for="acteurs1">Acteur 1</label>
        <select name="acteur1" id="acteurs1">
            <?php
                foreach ($recupActeurs as $recupActeur) :
                    echo '<option value="' . $recupActeur['id_acteurs'] . '">' . $recupActeur['prenom'] . ' ' . $recupActeur['nom'] . '</option>';
                endforeach;
                ?>
        </select>
        <label for="acteurs2">Acteur 2</label>
        <select name="acteur2" id="acteurs2">
            <?php
                foreach ($recupActeurs as $recupActeur) :
                    echo '<option value="' . $recupActeur['id_acteurs'] . '">' . $recupActeur['prenom'] . ' ' . $recupActeur['nom'] . '</option>';
                endforeach;
                ?>
        </select>
        <label for="acteurs3">Acteur 3</label>
        <select name="acteur3" id="acteurs3">
            <?php
                foreach ($recupActeurs as $recupActeur) :
                    echo '<option value="' . $recupActeur['id_acteurs'] . '">' . $recupActeur['prenom'] . ' ' . $recupActeur['nom'] . '</option>';
                endforeach;
                ?>
        </select>
        <h3>Réalisateur</h3>
        <select name="realisateur" id="realisateurs">
            <?php
                foreach ($recupRealisateurs as $recupRealisateur) :
                    echo '<option value="' . $recupRealisateur['id_Realisateurs'] . '">' . $recupRealisateur['prenom'] . ' ' . $recupRealisateur['nom'] . '</option>';
                endforeach;
                ?>
        </select>
        <h3>Genre</h3>
        <select name="genre" id="genres">
            <?php
                foreach ($recupGenres as $recupGenre) :
                    echo '<option value="' . $recupGenre['id_Genres'] . '">' . $recupGenre['type'] . '</option>';
                endforeach;
                ?>
        </select>

        <input type="submit" value="Envoyer">
    </form>

<?php
} else { ?>
    <form action="index.php?page=AjoutFilm" method="post">
        <input type="text" name="titre">
        <input type="number" name="date">
        <textarea name="synopsis"></textarea>
        <input type="number" name="duree">
        <input type="text" name="affiche">
        <input type="submit" value="Envoyer">
    </form>
    <?php
}
// include 'contact-form.php';

include 'footer.php';
