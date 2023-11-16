<?php
/*
Exercice 3 : Multiplication de deux tableaux
Description : Écrivez un script PHP qui utilise une double boucle pour multiplier 
chaque élément d'un tableau par chaque élément d'un autre tableau, 
puis affichez les résultats.
$tableau1 = [1, 2, 3];
$tableau2 = [4, 5, 6];
*/
$tableau1 = [1, 2, 3];
$tableau2 = [4, 5, 6];

//answer

for ($i=0; $i < count($tableau1) ; $i++) { 
    for ($j=0; $j <count($tableau2) ; $j++) { 
        $res = $tableau1[$i] * $tableau2[$j];
        echo $res."\n";
    }
}



?>