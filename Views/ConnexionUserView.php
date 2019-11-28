<?php
$title = "Ciné-117 : Connexion / inscription";
include 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="connexion col-6">
            <?php if (isset($_GET['erreur'])) { ?>
                <div class="erreur">
                    <p>Erreur dans l'identification</p>
                </div>

            <?php } ?>
            <form action="?page=ConnexionUser&provenance=<?php echo $provenance; ?>" method="post">
                <label for="emailInput">Votre email :</label>
                <input type="text" name="emailInput" id="emailInput">
                <label for="passwordInput">Mot de passe :</label>
                <input type="password" name="passwordInput" id="passwordInput">
                <input type="submit" value="Connexion">
            </form>
        </div>

        <div class="inscription col-6">
            <form action="?page=ConnexionUser" method="post">

                <label for="nouveauPrenom">Votre prénom :</label>
                <input type="text" name="nouveauPrenom" id="nouveauPrenom">
                <label for="nouveauNom">Votre nom :</label>
                <input type="text" name="nouveauNom" id="nouveauNom">
                <label for="nouveauEmail">Votre e-mail :</label>
                <input type="text" name="nouveauEmail" id="nouveauEmail">
                <label for="nouveauPassword">Votre mot de passe</label>
                <input type="password" name="nouveauPassword" id="nouveauPassword">
                <input type="submit" value="S'inscrire">

            </form>
        </div>
    </div>

</div>



<?php

// include 'contact-form.php';

include 'footer.php';
?>