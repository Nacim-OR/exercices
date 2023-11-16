<?php
/* Exercice 4
    Quelles seront les valeurs des variables A, B et C après exécution des instructions suivantes ?
    Var A,B,C : entier;
    début 
        A <- 3
        B <- 10
        C <- A + B
        B <- A + B
        A < C
     FIN 

     Réponse : 
    1)  A = 3       B = ?           C = ?
    2)  A = 3       B = 10          C = ?
    3)  A = 3       B = 10          C = A + B = 13
    4)  A = 3       B = A + B = 13  C = 13
    5)  A = C = 13  B = 13          C = 13
*/ 
    $a = 3 ;
    $b = 10 ;
    $c = $a + $b ;
    $b = $a + $b ;
    $a = $c ;

    echo "A = ".$a;
    echo PHP_EOL;
    echo "B = ".$b;
    echo PHP_EOL;
    echo "C = ".$c;
?>