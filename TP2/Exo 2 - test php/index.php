<html>
    <head>
        <title> Exemple Dynamique </title>
    </head>
    <body>
        <h1>
            La date d'aujourd'hui est le :
            <?php
                // Affichage de la date
                echo date("d/m/Y");
            ?>
        </h1>
        <h2>
            <?php
            $tab = array(1,2,3,4,5,6);
            echo "valeurs dans tab : ";
            for( $i = 0 ; $i<count($tab) ; $i++){
                echo $tab[$i]."\n";
            }
            echo "nb min = ".min($tab)."\n";
            echo "nb max = ".max($tab)."\n";
            ?>
        </h2>
        <h3>
            <?php
            $tab = array(5,2,5,7,4,6);
            foreach($tab as $value){
                $value."\n";
            }
            foreach($tab as $key => $value){
                echo $key." : ".$value."\n";
            }
            ?>
        </h3>
    </body>
</html>