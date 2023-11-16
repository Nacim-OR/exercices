<?php
/*
Exercice 1 : Créez une fonction nommée "calculerCarre" qui prend un nombre en entrée et renvoie le carré de ce nombre.
// Exemple d'utilisation :
$resultat = calculerCarre(5); // Renvoie 25
*/

// answer

function calculerCarre (Int $nbr) : int{
    $resultat = $nbr * $nbr;
    return $resultat;
}
$nbr = readline("Entrer un nombre : ");
$resultat = calculerCarre($nbr);
echo "Votre nombre ".$nbr." au carrée est égale à : $resultat."

?>