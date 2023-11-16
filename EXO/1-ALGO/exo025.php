<?php
/*
Exercice 25
    Ecrire un algorithme saisissant 2 variables entières 
    qui calcule et affiche leur moyenne.

    Algortihme average
    Var nb1, nb2, aver;
    begining : 
        //déclaration des variables
        nb1 <- Entrer une nombre entiers
        nb2 <- Entrer un nombre entiers 
        aver <- moyenne de nb1 & nb2

        //calcul
        aver <- (nb1 + nb2)/2

        // afficher 
        afficher aver
    ending
*/
        //begining

            // consigne
            echo "Entrer deux nombres entiers pour obtenir une moyenne";
            echo PHP_EOL;
            //initialisation 
            $nb1 = readline("Entrer un nombre entier : ");
            $nb2 = readline("Entrer un nombre entier : ");

            // calcul
            $aver = ($nb1 + $nb2) / 2;

            //affichage
            echo "La moyenne des nombres est : ".$aver;
?>