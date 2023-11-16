<?php
/*Exercice 7 : 
    On dispose de trois variables A, B et C. 
    Ecrivez un algorithme transférant à B la valeur de A, à C la valeur de B 
    et à A la valeur de C

    réponse :

    TMP <- A
    A <- B
    B <- C
    C <- TMP

    A = ?       B = ?       C = ?       TMP = A
    A = B       B = ?       C = ?       TMP = A
    A = B       B = C       C = ?       TMP = A
    A = B       B = C       C = A       TMP = A
*/
    $a = readline("Entrer A : ");
    $b = readline("Entrer B : ");
    $c = readline("Entrer C : ");

    $tmp = $a ; 
    $a = $b ;
    $b = $c ; 
    $c = $tmp;

    echo "A = ".$a ; 
    echo PHP_EOL ;
    echo "B = ".$b ;
    echo PHP_EOL;
    echo "C = ".$c;
?>