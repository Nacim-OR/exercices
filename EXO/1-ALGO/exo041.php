<?php
/*
Exercice 41 :
    Ecrire l'algorithme effectuant le décalage des éléments d'un
    tableau.
    tableau initial : D|E|C|A|L|A|G|E
    tableau modifié (décalage à gauche) : E|C|A|L|A|G|E|D

    Algorithme decalage array
    Var tab, temp
        Begining
            //Initialisation of values
            tab <- array ("D","E", "C", "A", "L", "A", "G", "E")
            temp <- 

            //first loop
            for (i = 0; i < count(tab) - 1; i++)
                tab[i] <- tab[i + 1]

            //affectation
            tab[7] <- temp

            // sec loop display
            for (i = 0; i < count(tab); i++)
                echo "tab[i] | "

        ending
*/
            //initialisation of values
            $tab = array("D","E", "C", "A", "L", "A", "G", "E");
            $temp = $tab[0];
            
            //first loop
            for ($i=0; $i < count($tab)-1 ; $i++) { 
                    $tab[$i] = $tab[$i +1];      
            }

            //affectation
            $tab[7] = $temp;

            //sec loop display
            for ($i=0; $i < count($tab) ; $i++) { 
                echo "$tab[$i] | ";
            }
?>