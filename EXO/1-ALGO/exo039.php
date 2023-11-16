<?php
/*
Exercice 39 : 
    Toujours et encore sur le même principe, écrivez un algorithme 
    permettant, à l'utilisateur de saisir les notes d'une classe. Le
    programme, une fois la saisie terminée, renvoie le nombre de ces
    notes supérieur à la moyenne de la classe.

    Algorithme average of array
    Var nbStudent, tab, temp, average, nbStudAver
        begining
            //Initilisation of values
            nbStudent <- Entrer le nombre d'étudiant
            tab <- array()
            temp <- 0
            nbStudAver <- 0

            //loop1
            for (i = 0; i < nbStudent; i++)
                tab[i] <- entrer une note
                temp <- temp + tab[i]

            // calcul of average
            average <- temp / nbStudent

            //loop2
            for (i = 0; i < nbStudent; i++)
                if (tab[i] >= average)
                nbStudentAver++

            //display
            display : la moyenne de la classe est de : average
            aller à la ligne
            display : Et il y nbStudentAver qui ont la moyenne

        ending
*/
            //Initialisation of values 
            $nbStudent = readline("Entrer le nombre d'étudiant : ");
            $tab = array();
            $temp = 0;
            $nbStudAver = 0;

            //loop1
            for ($i = 0; $i < $nbStudent; $i++) { 
                $tab[$i] = readline (" Entrer une note : "); 
                $temp = $temp + $tab[$i];
            }
            // calcul of average
            $average = $temp / $nbStudent;

            //lopp2
            for ($i = 0;$i < $nbStudent; $i++){
                if($tab[$i] >= $average){
                $nbStudAver++;
                }
            }
            
            // display result
            echo "La moyenne de la classe est de : $average";
            echo PHP_EOL;
            echo "Et il y a $nbStudAver qui ont la moyenne.";

?> 