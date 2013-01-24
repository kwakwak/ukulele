
        <?php
        include "importLevontin7.php";
        include "arrayToDB.php";
        
        $placeProgram=importLevontin7();
        echo "On " . date("d.m.y") . " Levontin7 sent " . count($placeProgram) . " Events: <BR/>";

        arrayToDB($placeProgram);
        ?>
