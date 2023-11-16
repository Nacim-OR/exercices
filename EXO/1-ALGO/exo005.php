<?php
/* Exercice 5
    Quelles seront les valeurs des variables A et  après exécution des instructions suivantes ?
    Var A,B : entier;
    début 
        A <- 5
        B <- 2
        A <- B 
        B <- A 
     FIN 

     Réponse : 
    1)  A = 5       B = ?
    2)  A = 5       B = 2
    3)  A = B = 2   B = 2
    4)  A = 2       B = A  = 2
*/ 
    $a = 5 ;
    $b = 2 ;
    $a = $b ;
    $b = $a ;

    echo "A = ".$a;
    echo PHP_EOL;
    echo "B = ".$b;
?>