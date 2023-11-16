<?php

/*

traduire les blocs conditionnels `if` en blocs conditionnels `switch`

bloc 1
résultat attendu :
c"est vrai

bloc 2
résultat attendu :
différent de cent

bloc 3
résultat attendu :
êtes-vous un robot ?

bloc 4
résultat attendu :
$variable est un nomnbre entier

*/

// bloc 1
/*if (true) {
    echo "c'est vrai";
    echo PHP_EOL;
}*/
//réponse bloc 1
$val= true;
switch (true) {
    case '$val':
        echo "c'est vrai\n";
        break;
    
    default:
        
        break;
}

// bloc 2


/*if ($i == 100) {
    echo "égal à cent";
    echo PHP_EOL;
} else {
    echo "différent de cent";
    echo PHP_EOL;
}*/
// Réponse bloc 2
$i= readline("Entrer un nombre : ");

switch ($i) {
    case '$i == 100':
        echo "$i est égal à cent\n";
        break;
    
    default:
        echo "$i estdifférent de cent\n";
        break;
}

// bloc 3
$password = readline("Entrer votre mot de passe : ");

/*if ($password == "toto") {
    echo "vous êtes loggé";
    echo PHP_EOL;
}
else if ($password == "1234") {
    echo "êtes-vous un robot ?";
    echo PHP_EOL;
} else if ($password = "abcd") {
    echo "êtes-vous un robot ?";
    echo PHP_EOL;
} else {
    echo "mauvais mot de passe";
    echo PHP_EOL;
}*/

//réponse bloc 3
switch ($password) {
    case $password == "toto":
        echo "vous êtes loggé\n";
        break;
    case $password == "1234":
        echo "êtes-vous un robot ? \n";
        break;
    case $password = "abcd":
        echo "êtes-vous un robot ?\n";
        break;
    default:
        echo "mauvais mot de passe\n";
        break;
}
// bloc 4
$variable = readline("What else ? ");

/*if (is_string($variable)) {
    echo "$variable est une chaîne de caractères";
    echo PHP_EOL;
} else if (is_float($variable)) {
    echo "$variable est un nombre à virgule flottante";
    echo PHP_EOL;
} else if (is_array($variable)) {
    echo "$variable est une liste ";
    echo PHP_EOL;
} else if  (is_int($variable)) {
    echo "$variable est un nomnbre entier";
    echo PHP_EOL;
}*/

//Réponse bloc4
switch ($variable) {
    case is_string($variable) :
        echo "$variable est une chaîne de caractères\n";
        break;
    case is_float($variable) :
        echo "$variable est un nombre à virgule flottante\n";
        break;
    case is_array($variable) :
        echo "$variable est une liste\n";
        break;
    case is_int($variable) :
        echo "$variable est un nombre entier\n";
        break;
    default:
        break;
}
