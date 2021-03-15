<?php
function renderMenuToHTML($currentPageId) {
    $mymenu = array(
        'index' => array( 'Accueil' ),
        'cv' => array( 'Cv' ),
        'ci' => array('Mes hobbies')
    );

    echo "<nav class=\"menu\"><u1>";
    foreach($mymenu as $pageId => $pageParameters) {
        echo "<li><a ";
        if ($currentPageId==$pageId)
            echo "class=\"selected\"";
        echo "href=$pageId.php>$pageParameters[0]</a></li>";
    }
    echo "</u1></nav>";

    foreach($mymenu as $pageId2) {
        $currentPageId = $pageId2;
        if(isset($_GET['page'])) {
            $currentPageId = $_GET['page'];
        }
    }
}
?>