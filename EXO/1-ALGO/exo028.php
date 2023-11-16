<?php
/*
Exercice 28 : 
    Ecrire un algorithme permettant d'imprimer le triangle suivant :
    1
    12
    123
    1234
    123456
    ...
    Le nombre de lignes étant donée par l'utilisateur.

    Algorithme triangle
    Var nbL;

    begining
        for (i = 1; i <= nbL; i++ )
            for (j = 1; j <= i; j++)
                echo j ;
                echo " ";
            echo php_eol
    ending
*/

$nbL = readline ("Entrer un nombre : ");

for ($i=1; $i <= $nbL; $i++) { 
    for ($j=1; $j <= $i ; $j++) { 
        echo $j;
        echo " ";
    }
    echo PHP_EOL;
}
?>