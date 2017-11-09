<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Coucou les boys, bienvenue dans mon exercice debutor3000</h2>
<p><strong>Enonce :</strong> Creer un tableau (ici 200 cases) avec des valeurs aléatoires de 1 à 100. Parcourir le tableau pour afficher le nombre d'itérations de chaque valeur.</p>
<?php
    $tab = array();
    for($j=1; $j<201; $j++) { /* création du tableau */
        array_push($tab, rand(1,100));
    }
    $num = 0;
    for($i=1; $i<101; $i++) {
        foreach($tab as $var) {
            if($var == $i) {
                $num++;
            }
        }
        echo "La valeur ".$i." est presente ".$num." fois.<br />";
        $num = 0;
    }
?>
</body>
</html>