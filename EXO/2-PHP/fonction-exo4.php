<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/

//réponse

function soustraction ($nbr, $nbr2) :  int {
    $resultat = $nbr - $nbr2;
    return $resultat;
}

$resultat = soustraction(3, 2);
echo " Le resultat est : resultat : $resultat";
