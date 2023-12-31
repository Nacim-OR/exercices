<?php

/*

traduire les blocs conditionnels `if` en blocs conditionnels `switch`

résultat attendu :
$variable est un nombre entier
$variable est une chaîne de caractères
$variable est un nombre à virgule flottante
$variable est un objet
$variable a la valeur null

*/

//bloc1
$variable = 42;

/*if (is_int($variable)) {
    echo "$variable est un nombre entier";
    echo PHP_EOL;
} else if (is_string($variable)) {
    echo "$variable est une chaîne de caractères";
    echo PHP_EOL;
} else if (is_float($variable)) {
    echo "$variable est un nombre à virgule flottante";
    echo PHP_EOL;
} else if (is_object($variable)) {
    echo "$variable est un objet";
    echo PHP_EOL;
} else if (is_null($variable)) {
    echo "$variable a la valeur NULL";
    echo PHP_EOL;
}*/
//réponse bloc 1
switch ($variable) {
    case is_int($variable):
        echo "$variable est un nombre entier\n";
        break;
    case is_float($variable):
        echo "$variable est un nombre à virgule flottante\n";
        break;
    case is_string($variable):
        echo "$variable est une chaine de caractère\n";
            break;
    case is_object($variable):
        echo "$variable est un objet\n";
        break;   
    case is_null($variable):
        echo "$variable à la valeur null\n";
    default:
        break;
}

//bloc 2
$variable = 'cours de php';

/*if (is_int($variable)) {
    echo '$variable est un nombre entier';
    echo PHP_EOL;
} else if (is_string($variable)) {
    echo '$variable est une chaîne de caractères';
    echo PHP_EOL;
} else if (is_float($variable)) {
    echo '$variable est un nombre à virgule flottante';
    echo PHP_EOL;
} else if (is_object($variable)) {
    echo '$variable est un objet';
    echo PHP_EOL;
} else if (is_null($variable)) {
    echo '$variable a la valeur NULL';
    echo PHP_EOL;
}*/
//réponse bloc 2
switch ($variable) {
    case is_int($variable):
        echo "$variable est un nombre entier\n";
        break;
    case is_float($variable):
        echo "$variable est un nombre à virgule flottante\n";
        break;
    case is_string($variable):
        echo "$variable est une chaine de caractère\n";
            break;
    case is_object($variable):
        echo "$variable est un objet\n";
        break;   
    case is_null($variable):
        echo "$variable à la valeur null\n";
    default:
        break;
}

//bloc 3
$variable = 4.2;

/*if (is_int($variable)) {
    echo '$variable est un nombre entier';
    echo PHP_EOL;
} else if (is_string($variable)) {
    echo '$variable est une chaîne de caractères';
    echo PHP_EOL;
} else if (is_float($variable)) {
    echo '$variable est un nombre à virgule flottante';
    echo PHP_EOL;
} else if (is_object($variable)) {
    echo '$variable est un objet';
    echo PHP_EOL;
} else if (is_null($variable)) {
    echo '$variable a la valeur NULL';
    echo PHP_EOL;
}*/
// réponse bloc 3
switch ($variable) {
    case is_int($variable):
        echo "$variable est un nombre entier\n";
        break;
    case is_float($variable):
        echo "$variable est un nombre à virgule flottante\n";
        break;
    case is_string($variable):
        echo "$variable est une chaine de caractère\n";
            break;
    case is_object($variable):
        echo "$variable est un objet\n";
        break;   
    case is_null($variable):
        echo "$variable à la valeur null\n";
    default:
        break;
}

//bloc 4
$variable = new stdClass();

/*if (is_int($variable)) {
    echo '$variable est un nombre entier';
    echo PHP_EOL;
} else if (is_string($variable)) {
    echo '$variable est une chaîne de caractères';
    echo PHP_EOL;
} else if (is_float($variable)) {
    echo '$variable est un nombre à virgule flottante';
    echo PHP_EOL;
} else if (is_object($variable)) {
    echo '$variable est un objet';
    echo PHP_EOL;
} else if (is_null($variable)) {
    echo '$variable a la valeur NULL';
    echo PHP_EOL;
}*/

//réponse bloc 4
switch ($variable) {
    case is_int($variable):
        echo "$variable est un nombre entier\n";
        break;
    case is_float($variable):
        echo "$variable est un nombre à virgule flottante\n";
        break;
    case is_string($variable):
        echo "$variable est une chaine de caractère\n";
            break;
    case is_object($variable):
        echo '$variable est un ojbet';
        echo PHP_EOL;
        break;   
    case is_null($variable):
        echo "$variable à la valeur null\n";
    default:
        break;
}


// bloc 5
$variable = null;

/*if (is_int($variable)) {
    echo '$variable est un nombre entier';
    echo PHP_EOL;
} else if (is_string($variable)) {
    echo '$variable est une chaîne de caractères';
    echo PHP_EOL;
} else if (is_float($variable)) {
    echo '$variable est un nombre à virgule flottante';
    echo PHP_EOL;
} else if (is_object($variable)) {
    echo '$variable est un objet';
    echo PHP_EOL;
} else if (is_null($variable)) {
    echo '$variable a la valeur null';
    echo PHP_EOL;
}*/


//réponse bloc 5

switch ($variable !==0) {
    case is_int($variable):
        echo "$variable est un nombre entier\n";
        break;
    case is_float($variable):
        echo "$variable est un nombre à virgule flottante\n";
        break;
    case is_string($variable):
        echo "$variable est une chaine de caractère\n";
            break;
    case is_object($variable):
        echo "$variable est un objet\n";
        break;   
    case is_null($variable):
        echo '$variable à la valeur null';
        echo PHP_EOL;
    default:
        break;
}
