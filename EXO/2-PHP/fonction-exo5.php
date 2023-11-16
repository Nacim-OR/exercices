<?php

/*

écrire une fonction nommée `puissance` qui :

- prend un premier paramètres de type nombre entier
- prend un deuxième paramètres de type nombre entier ayant la valeur par défaut `2`
- élève le premier paramètre à la puissance du deuxième paramètre
- renvoit le résultat

appeler cette fonction en lui passant un seul paramètre ayant la valeur `2` et afficher le résultat dans la console
appeler cette fonction en lui passant les paramètres ayant la valeur `2` et `3` et afficher le résultat dans la console

*/

//réponse 

function puissance($nbr, $nbr2=2) : int {
    $resultat = $nbr ** $nbr2;
    return $resultat;
}

$resultat = puissance(2);
echo "Le resultat est : $resultat \n";

$resultat = puissance(2, 3);
echo "les résultat sont : $resultat";
