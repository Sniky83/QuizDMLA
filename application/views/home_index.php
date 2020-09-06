<?php
    include("application/helpers/a_config.php");
    defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<div class="page">

    <head class="header">
        <?php include("layouts/header.php") ?>
    </head>

    <body class="content"> <!--<onload="changeStyle()">-->
        <?php include("layouts/navigation.php") ?>
        <h4>Prise en considération du handicap de la DMLA</h4>
        <div class="container-fluid home-main">
            <div class="row">
                <div class="col-md-4 home-content">
                    <h3>Bienvenue dans notre application</h3>
                    <p>Projet génie logiciel </p>
                    <p>Groupe 3 </p>
                    <p>Raphaël GUIOT</p>
                    <p>Louis HERVE</p>
                    <p>Wilfrid MEZARD</p>
                    <p>Démonstration de l'application du projet de Génie logiciel. Le Backend à été développé en PHP 7 avec le framework CodeIgniter et pour le Front-End nous avons choisi jQuery et Bootstrap</p>
                </div>
                <div class="col-md-4 offset-md-4 home-content">
                    <h3>La D.M.L.A.</h3>
                    <p>La dégénérescence maculaire liée à l'âge est une dégradation d'une partie de la rétine. La perte de la vision centrale qui en résulte constitue une gêne majeure pour les utilisateurs d'applications informatiques.
                        Nous avons choisi d'orienter ce projet de groupe vers la prise en compte de ce handicap et par conséquent d'adapter notre solution aux usagers atteints.
                        Ainsi, nous souhaitons permettre à l'utilisateur d'adapter l'application à sa vue et son confort. de plus nous avons limité au maximum l'utilisation de l'espace centrale de l'écran, zone la plus sensible pour les personnes atteintes de cette maladie.
                    </p>
                    <a href="https://www.ameli.fr/assure/sante/themes/dmla/comprendre-dmla">Comprendre la DMLA (Amélie.fr)</a>
                    <br>
                    <a href="http://www.association-dmla.com/la-dmla/">Association DMLA</a>
                </div>
            </div>

        </div>
    </body>
    <footer class="footer">
        <?php include("layouts/footer.php") ?>
    </footer>
</div>

</html>