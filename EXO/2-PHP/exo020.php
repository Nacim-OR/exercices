<?php
/*
Exercice 4 : Écrivez une fonction nommée "compterMots" qui prend une chaîne de caractères en entrée et renvoie le nombre de mots dans cette chaîne.
 
// Exemple d'utilisation :
$texte = "Ceci est un exemple de texte.";
$resultat = compterMots($texte); // Renvoie 6
*/

//answer
function compterMots(String $texte) : int{
    $resultat = str_word_count($texte);
    return $resultat;
}

$texte ="Ceci est un exemple de texte.";
$resultat = compterMots($texte);
echo "Le nombre de mot dans la phrase est de : ".$resultat;


?>