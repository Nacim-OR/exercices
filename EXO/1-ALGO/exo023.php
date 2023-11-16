<?php
/* 
Exercice 23 :
    Réécrire l'algorithme précédent, mais cette fois-ci on 
    ne connait pas d'avance combien l'utilisateur souhaite 
    saisir de nombres. La saisie des nombres s'arrête 
    lorsque l'utilisateur entre un zéro.
*/ 
// initialization of variables

$max = -INF;
$pos = 0;
$i = 0;
$n = -INF;

//treatment
while ($n < 0 or $n > 0) {
    $n = readline ("Entrez un nombre: ");
    $i++;
}
    if ($max < $n) {
        $max = $n;
        $pos = $i;
    }
//show
    echo "Le plus grand nombre est: ".$max. " et sa position est: ".$pos;
?>