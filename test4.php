<!-- VERSION 2.2 -->

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
<p><strong>Enonce :</strong> Creer un tableau avec des valeurs aléatoires de 1 à 100. Parcourir le tableau pour afficher le nombre d'itérations de chaque valeur.</p>
<?php
    $tab = array(); /* création du tableau vide */
    for($j=1; $j<201; $j++) { /* remplissage du tableau, ici de 200 cases*/
        array_push($tab, rand(1,100));
    }
    $num = 0; /* ça c'est la variable qui va compter le nombre d'occurences */
    for($i=1; $i<101; $i++) { /* la boucle qui recherche les nombres de 1 à 100*/
        foreach($tab as $var) { /* a chaque fois on parcourt le tableau, complexité 100*taille du tableau */
            if($var == $i) {
                $num++;
            }
        }
        echo "La valeur ".$i." est presente ".$num." fois.<br />"; /* Là on affiche */
        $num = 0; /* et là on reset la valeur de num pour la valeur suivante ($i) */
    }
?>
</body>
</html>