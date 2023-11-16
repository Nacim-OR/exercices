<?php
/* 
Exercice 16 :
    Ecrire un algorithme qui demande un nombre à l'utilisateur
    et l'informe ensuite si ce nombre est positif ou négatif
    (on inclut cette fois le traitement du cas où le nombre
    vaut zéro).

    Alogorithme fonction si ou et imbriqué
    Var n1;
        début :
            //demander à l'utilisateur d'entrer un nombre
            N1 <- entrer un nombre
            if (N1 > 0)
                    afficher "c'est un nombre positif"
                elseif (N1 == 0 )
                    afficher "ce nombre n'est ni positif ni négtif. il sépare les deux."
                else
                    afficher "ce nombre est négatif"
        fin

*/ 
    $n1 = readline("Entrer un nombre positif ou négatif : ");

    if ($n1 > 0) {
            echo "Le produit est positif";
        } elseif ($n1 == 0){
            echo "Le produit n'est ni positif ni négatif. Il est la limite des deux";
        } else {
            echo "Le produit est négatif";
    }

?>