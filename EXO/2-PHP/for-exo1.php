<?php

/*

afficher les nombres pairs, entre 1 et 100

résultat attendu :

    2
    4
    6
    8
    10
    12
    14
    16
    18
    20
    ...

*/

//réponse 1
/*$val =2 ;
$valFin = 0;
for ($i=1; $i <= 50 ; $i++) { 
    $valFin = $val * $i;
    echo "$valFin\n";
}*/

//réponse 2
/*for ($i=0; $i <= 100; $i+= 2) { 
    echo "$i\n";
}*/

//réponse 3
for ($i=0; $i <= 100; $i++) { 
    if ($i % 2 == 0) {
        echo "$i\n";
    }
}