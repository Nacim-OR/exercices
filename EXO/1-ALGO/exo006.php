<?php
/*Exercice 6 : 
    Ecrire un algorithme permettant d'échanger les valeurs 
    de deux variables A et B.

    réponse :
    
    TMP <- A
    A <- B
    B <- TMP

    1)  A = ?   B = ?       TMP = A
    2)  A = B   B = ?       TMP = A
    3)  A = B   B = TMP     TMP = A
    */  
    $tmp = $a ;
    $a = $b ;
    $b = $tmp ;
  

    echo "A = ".$a ; 
    echo PHP_EOL ;
    echo "B = ".$b ;
    echo PHP_EOL;
?>