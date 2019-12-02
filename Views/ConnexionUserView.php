<?php
$title = "Ciné-117 : Connexion / inscription";
include 'header.php';
?>
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="connexion col-sm-5 fondgris">
            <h3>Connectez-vous :</h3>
            <?php if (isset($_GET['erreur'])) { ?>
                <div class="erreur">
                    <p>Erreur dans l'identification</p>
                </div>

            <?php } ?>
            <form action="?page=ConnexionUser&provenance=<?php echo $provenance; ?>" method="post">
                <div class="champ">
                    <label for="emailInput">Votre email :</label>
                    <input type="text" name="emailInput" id="emailInput">
                </div>
                <div class="champ">
                    <label for="passwordInput">Mot de passe :</label>
                    <input type="password" name="passwordInput" id="passwordInput">
                </div>
                <div class="champ">
                     <input class="boutonConnect" type="submit" value="Connexion">
                </div>              
            </form>
        </div>
        <div class="col-sm-2 ou">
            <p>ou</p>
        </div>
        <div class="inscription col-sm-5 fondgris">
            <h3>Inscrivez-vous :</h3>
            <form action="?page=ConnexionUser" method="post">
                <div class="champ">
                    <label for="nouveauPrenom">Votre prénom :</label>
                    <input type="text" name="nouveauPrenom" id="nouveauPrenom">
                </div>
                <div class="champ">
                    <label for="nouveauNom">Votre nom :</label>
                    <input type="text" name="nouveauNom" id="nouveauNom">
                </div>
                <div class="champ">
                    <label for="nouveauEmail">Votre e-mail :</label>
                    <input type="text" name="nouveauEmail" id="nouveauEmail">
                </div>
                <div class="champ">
                    <label for="nouveauPassword">Votre mot de passe</label>
                    <input type="password" name="nouveauPassword" id="nouveauPassword">
                </div>
                <div class="champ">
                    <input class="boutonConnect" type="submit" value="S'inscrire">
                </div>
                

            </form>
        </div>
    </div>

</div>



<?php

// include 'contact-form.php';

include 'footer.php';
?>