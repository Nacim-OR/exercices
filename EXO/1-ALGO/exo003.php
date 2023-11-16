<?php
/* Exercice 3
    Quelles seront les valeurs des variables A et  après exécution des instructions suivantes ?
    Var A,B : entier;
    début 
        A <- 5
        B <- A + 4
        A <- A + 1 
        B <- A - 4
     FIN 

     Réponse : 
    1)  A = 5       B = ?
    2)  A = 5       B = A + 4 = 9
    3)  A = A + 1   B = 9
    4)  A = 6       B = A - 4 = 2
*/ 
    $a = 5 ;
    $b = $a + 4 ;
    $a = $a + 1 ;
    $b = $a - 4 ;

    echo "A = ".$a;
    echo PHP_EOL;
    echo "B = ".$b;
?>