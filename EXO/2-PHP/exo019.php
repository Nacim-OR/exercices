<?php
/*
Exercice 3 : Créez une fonction nommée "estPalindrome" qui prend une chaîne de caractères en entrée et renvoie vrai si la chaîne est un palindrome 
se lit de la même manière de gauche à droite et de droite à gauche), sinon renvoie faux.
 
// Exemple d'utilisation :
$resultat = estPalindrome("radar"); // Renvoie vrai
 
*/

// answer

function estPalindrome(String $mot) : string {
    $inverse = strtolower(strrev($mot));
    if (strtolower($mot) == $inverse) {
        return $resultat = "vrai, le mot est bien un palindrome";
    } else {
        return $resultat = "faux, le mot n'est pas un palindrome";
    }
}
 
$mot = "radar";
$resultat = estPalindrome($mot);
echo $resultat;

?>