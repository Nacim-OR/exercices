<?php

// Copiez-collez le tableau que vous avez écrit dans l'exercice 2) des tableaux simples (`tableaux-simples.php`)
// Écrivez le code d'une boucle `for` qui affiche dans la console toutes les valeurs du tableau
// Vous devez utiliser la fonction `count()` pour déterminer le nombre maximal de boucles

// Réponse
$tab = array(17, 25, 36);
$tab2 = array('Riri', 'Fifi', 'Loulou');

for ($i=0; $i < count($tab); $i++) { 
    echo "$tab[$i] | ";
   
    
}

echo PHP_EOL;

for ($i=0; $i < count($tab2); $i++) { 
    echo "$tab2[$i] | ";
}