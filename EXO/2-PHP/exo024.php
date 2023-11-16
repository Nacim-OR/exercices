<?php
/*
Exercice 5 : Recherche d'un élément dans un tableau
Description : Écrivez un script PHP qui prend un tableau de nombres et un nombre à rechercher en entrée, 
puis utilise la fonction native in_array() pour déterminer si le nombre se trouve dans le tableau. 
Affichez un message approprié.
*/

//answer
$tab = [1, 2, 7, 19, 156, 94];
$num = readline("Entrer un nombre à rechercher dans le tableau : ");

if (in_array($num, $tab)) {
    echo "Votre nombre est dans le tableau";
}else {
    echo "Votre nombre n'est pas dans le tableau";
}

?>