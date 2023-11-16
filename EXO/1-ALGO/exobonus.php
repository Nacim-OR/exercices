<?php
/*
Exercice 31 : 
    Ecrire un programme qui affiche 
    0 1 2 3 4 5 6 7 8 9
    0 1 2 3 4 5 6 7 8 9
    0 1 2 3 4 5 6 7 8 9
    0 1 2 3 4 5 6 7 8 9
    0 1 2 3 4 5 6 7 8 9

    Algorithme double loop
    Var nb1, nb2;
        Begining
            nb1 <- Entrer un nombre : 
            nb2 <- Entrer un nombre : 

            //loop
            for (i = 0; i < nb1 ; i++)
                aller à la ligne
                for (j = 0; j <= nb2; j++)
                //affichage
                afficher j
                afficher un espace entre chaque chiffre
                end 2nd loop
            end first loop
        ending
*/
        // initialisation des values
        $nb1 = readline("Entrer un nombre : ");
        $nb2 = readline("Entrer un nombre : ");

        //double loop
        for ($i=0; $i < $nb1 ; $i++) { 
            echo PHP_EOL;
            for ($j=0; $j <= $nb2 ; $j++) { 
                //affichage
                echo $j;
                echo " ";
            }
        }
?>