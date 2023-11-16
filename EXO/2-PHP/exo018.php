<?php
/*
Exercice 2 : Écrivez une fonction nommée "calculerMoyenne" qui prend un tableau de nombres en entrée et renvoie la moyenne de ces nombres.
Utiliser les fonctions array_sum() et count() 
 
// Exemple d'utilisation :
$listeNombres = array(10, 20, 30, 40, 50);
$resultat = calculerMoyenne($listeNombres); // Renvoie 30
*/

// answer

function calculerMoyenne (array $listeNombres) : int {
    $resultat = array_sum($listeNombres) / count($listeNombres);
    return $resultat;
}

$listeNombres = array(10, 20, 30, 40, 50);
$resultat = calculerMoyenne($listeNombres);
echo "La moyenne de ces nombres est de : $resultat."


?>