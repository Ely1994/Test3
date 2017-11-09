<?php
    $x = rand(0,100);
    $y = rand(0,100);
    $z = rand(0,100);
    $tab = array($x, $y, $z);
    foreach($tab as $var) {
        if($var > 15) {
            echo"La valeur".$var." est ".$var.".\n";
        }
    }

?>