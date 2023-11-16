<?php
/*
Exercice 34 :
    Ecrivez un algorithme calculant la somme des valeurs d'un tableau
    (on suppose que le tableau a été préalablement saisi).

    algorithme sum array
    Var nb1, nb2, nb3, nb4, nb5;
        begining :
            //initialisation des variables 
            nb1 <- 5
            nb2 <- 10
            nb3 <- 15
            nb4 <- 20
            nb5 <- 25
            $sum <- 0
            // array
            tab <- array (5, 10, 15, 20, 25)

            // calcul
            pour i allant de 0 à 5 par pas de 1
                sum <- sum + toutes les valeurs du tableau (tab[i])

            // affichage 
            afficher : Le total est égale à : sum
        fin
*/
            // initialisation of values
            $nb1 = 5;
            $nb1 = 10;
            $nb1 = 15;
            $nb1 = 20;
            $nb1 = 25;
            $sum = 0;

            // array
            $tab = array(5, 10, 15, 20, 25);

            //calcul 
            for ($i = 0; $i < 5; $i++) { 
                $sum = $sum + $tab[$i];
            }

            // affichage
            echo "Le total est égale à : ".$sum;
?>