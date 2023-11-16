<?php
/*
Exercice 36 :
    Toujours à partir de deux tableaux précédemment saisis, écrivez
    un algorithme qui calcule le Schtroumpf des deux tableaux. Pour
    calculer le Schtroumpf, il faut multiplier chaque élément du 
    tableau1 par chaque élément du tableau2, et additionner le tout.
    Par exemple si l'on a :
    tableau 1 : 
        2 5 8 4
    tableau 2
        6 7
    le schtroumpf sera :
    6*2 + 6*5 + 6*8 + 6*4 + 7*2 + 7*5 + 7*8 + 7*4 = 247

    algorithme array 
    Var schtroumpf, tab1, tab2;
        Begining
            // initialisation of values
            tab1 <- array (4, 8, 7, 9, 1, 5, 4, 6)
            tab2 <- array (7, 6, 5, 2, 1, 3, 7, 4)
            schtroumpf <- 0

            // calcul
            for (i = 0; i < 8 ; i++)
                for (j = 0; j < 8; j++)
                    schtroumpf <- schtroumpf + tab1[i] * tab2[j]
         
            // affichage
            afficher le schtroumpf est égale à .schtroumpf

        fin
*/
            // initialisation of values
            $tab1 = array(4, 8, 7, 9, 1, 5, 4, 6);
            $tab2 = array(7, 6, 5, 2, 1, 3, 7, 4);
            $schtroumpf = 0;

            // calcul
            for ($i=0; $i < sizeof($tab1) ; $i++) { 
                for ($j=0; $j < count($tab2) ; $j++) { 
                    $schtroumpf = $schtroumpf + $tab1[$i] * $tab2[$j];
                }
            }

            //affichage
            echo " Le schtroumpf est égale à : ".$schtroumpf;
?>