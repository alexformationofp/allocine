<?php

$title = "Home";
// include 'header.php';

?>

<div id="main" class="">
        <h2>Liste des films</h2>
        <ul>
            <?php 
            foreach ($listeFilms as $film) :
                echo '<li>'.$film['titre'].'</li>';
            endforeach;
            ?>
        </ul>
</div>

<?php

// include 'contact-form.php';

// include 'footer.php';