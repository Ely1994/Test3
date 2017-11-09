<?php
    $x = rand(1,100);
    $y = rand(1,100);
    $z = rand(1,100);
    $tab = array($x, $y, $z);
    $num = 0;
    for($i=1; $i<101; $i++) {
        foreach($tab as $var) {
            if($var == $i) {
                $num++;
            }
        }
        echo "La valeur ".$i." est présente ".$num." fois.<br />";
        $num = 0;
    } cebyfueyueu
