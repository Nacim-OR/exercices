<?php
/* Exercice 2
    Quelles seront les valeurs des variables A, B et C après exécution des instructions suivantes ?
    Var A,B,C : entier;
    début 
        A <- 5
        B <- 3
        C <- A + B
        A <- 2
        C < B - A
     FIN 

     Réponse : 
    1)    A = 5   B = ?   C = ?
    2)    A = 5   B = 3   C = ?
    3)    A = 5   B = 3   C = A + B = 8
    4)    A = 2   B = 3   C = 8
    5)    A = 2   B = 3   C = B - A = 1
*/ 
    $a = 5 ;
    $b = 3 ;
    $c = $a + $b ;
    $a = 2 ;
    $c = $b - $a;

    echo "A = ".$a;
    echo PHP_EOL;
    echo "B = ".$b;
    echo PHP_EOL;
    echo "C = ".$c;
?>