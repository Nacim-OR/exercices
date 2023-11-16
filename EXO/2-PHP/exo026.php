<?php
/*
Exercice 1 : Affichage d'un tableau en 2D
Description : Écrivez un script PHP qui utilise une double boucle pour afficher un tableau en 2D sous forme de tableau .
$tab2D = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
*/

// answer
$tab2D = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
// var_dump($tab2D);
foreach ($tab2D as $keys => $values) {
    echo "line ".($keys + 1)." | ";
    foreach ($values as $key => $value) {
        echo " $value | ";
    }
    echo PHP_EOL;
}

?>