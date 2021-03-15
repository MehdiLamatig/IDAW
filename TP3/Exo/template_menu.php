<?php
function renderMenuToHTML($currentPageId) {
    $mymenu = array(
        'accueil' => array( 'Accueil' ),
        'cv' => array( 'Cv' ),
        'ci' => array('Mes hobbies')
    );

    echo "<nav class=\"menu\"><u1>";
    foreach($mymenu as $pageId => $pageParameters) {
        echo "<li><a ";
        if ($currentPageId==$pageId)
            echo "class=\"selected\"";
        echo "href=index.php?page=$pageId>$pageParameters[0]</a></li>";
    }
    echo "</u1></nav>";
}
?>