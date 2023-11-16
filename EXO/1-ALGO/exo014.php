<?php
/* 
Exercice 14 :
    Ecrire un algorithme qui demande deux nombres à l'utilisateur
    et l'informe ensuite si leur produit est négatif ou positif 
    (on laisse de coté le cas où le produit est nul). Attention
    toutefois : on ne doit pas calculer le produit de deux nombre

    Alogorithme fonction si ou et imbriqué
    Var N1, N2;
        début :
            N1 <- l'utilisateur entre un nombre positf ou négatif
            N2 <- l'utilisateur entre un second nombre positif ou négatif
            // condition
            if (N1 and N2 < 0 ou N1 et N2 > 0)
                afficher "le produit est positif"
            else 
                afficher "le produit est négatif"
        fin

*/ 
    $n1 = readline("Entrer un nombre positif ou négatif : ");
    $n2 = readline("Entrer un second nombre positif ou négatif : ");

    if ($n1 > 0 and $n2 > 0 or $n1 < 0 and $n2 < 0) {
        echo "Le produit est positif";
    } else {
        echo "Le produit est négatif";
    }
    

?>