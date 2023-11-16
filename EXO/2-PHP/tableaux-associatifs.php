<?php

// 1. Affectez un tableau associatif de trois valeurs de type nombre à virgule flottante avec des clés alpanumériques à une variable

// 2. Affectez un tableau associatif de trois valeurs de type chaîne de caractères avec des clés alpanumériques à une variable

// 3. Parcourir le premier tableau et afficher uniquement la valeur.

// 4. Parcourir le premier tableau et afficher le clé et la valeur.

//réponse 1
$tab = array (
        1 => 3.33,
        2 => 0.25,
        3 => 7.63
);

//réponse 2
$tab2 = array (
        17 => 'Riri',
        21 => 'Fifi',
        36 => 'Loulou'
);

//réponse 3 
foreach ($tab as $value) {
    echo "$value \n";
}

echo PHP_EOL;

//réponse 4
foreach ($tab as $key => $value) {
    echo "$key : $value \n";
}