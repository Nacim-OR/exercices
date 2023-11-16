<?php
/* 
Exercice 17 :
    Ecrire un algorithme qui demande deux nombres à l'utilisateur
    et l'informe ensuite si le produit est négatif ou positif
    (on inclut cette fois le traitement du cas ou le produit 
    peut-être nul).

    Algorithme fonction if else 
    Var, N1, N2;
        Début 
        N1 <- l'utilisateur entre un nombre
        N2 <- l'utilisateur entre un second nombre
         if (N1 and N2 < 0 ou N1 et N2 > 0)
                    afficher "c'est un nombre positif"
                elseif (N1 == 0 )
                    afficher "ce nombre n'est ni positif ni négtif. il sépare les deux."
                else
                    afficher "ce nombre est négatif"
        fin
*/ 
        $n1 = readline("Entrer un nombre positif ou négatif : ");
        $n2 = readline("Entrer un second nombre positif ou négatif : ");

    if ($n1 > 0 && $n2 > 0 || $n1 < 0 && $n2 < 0) {
            echo "Le produit est positif";
        } elseif($n1 == 0 || $n2 == 0){
            echo "le produit n'est ni positif ni négatif. Il sépare les deux.";
        } else {
            echo "Le produit est négatif";
    }

?>