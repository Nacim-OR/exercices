<?php
/*
Exercice 20 
    Ecrire un algorithme qui demande un nombre de départ, 
    et qui calcule la somme des entier jusqu'à ce nombre.
    Par exemple :
    si on entre 5, le programe doit calculer : 
    1 + 2 + 3 + 4 + 5 = 15

    Algorithme boucle for 
    Var, nb:
        début :
            // déclaration de variable
            nb <- entrer un nombre entier
            sum <- 1
             //calcul
            for ($i = 1 ; $i <= $nb ; $i++ )
                $sum = $sum * $i
            // affichage 
            echo $sum;
        fin
*/
    //déclaration
        $nb = readline("entrer un nombre : ");
        $sum = 1;

        //boucle for
        for ($i = 1; $i <= $nb; $i++) {
             $sum = $sum * $i;
        }
        echo $sum; 
?>