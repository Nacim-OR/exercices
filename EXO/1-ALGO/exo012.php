<?php
/* 
Exercice 12 : 
    Ecrire un programme qui lit le prix HT d'un article, le nomre d'articles
    et le taux de TVA, et qui fournit le prix total correspondant. Faire en 
    sorte que des libellés apparaissent clairement. (TTC=NA*HT*(1+TVA))

    Algorithme liaison;
    Var NA, HT, TVA, TTC : entier;
        début 
            HT <- 27 €
            // saisie client nombre d'articles
            NA <- nombre d'articles souhaités par le client
            TVA <- 20%
            TTC <- NA * HT * (1 + TVA)
            
            // affichage 
            afficher(TVA)
            afficher (TTC)
        Fin
*/
    $ht = 27 ;
    
    echo "Prix unitaire hors taxe : ".$ht;
    echo PHP_EOL;

    $na = readline("Entrer le nombre d'articles souhaiter : ");

    $tva = 0.2 ;

    echo "TVA = ".$tva ;
    echo PHP_EOL;

    $ttc = ($ht * $na * (1 + $tva)) ; 

    echo "Prix TTC = ".$ttc ;

?>