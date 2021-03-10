<!doctype html>
<html>
    <body>
        <nav class="menu">
            <?php
            function renderMenuToHTML($currentPageId) {
                // un tableau qui d\'efinit la structure du site
                $mymenu = array(
                    // idPage titre
                    'index' => array( 'Accueil' ),
                    'cv' => array( 'Cv' ),
                    'ci' => array('Mes ci')
                );
                foreach($mymenu as $pageId => $pageParameters) {
                    echo "...";
                }
            }
            ?>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="cv.php">Cv</a></li>
                <li><a href="ci.php">Mes Projets</a></li>
            </ul>
        </nav>
    </body>
</html>