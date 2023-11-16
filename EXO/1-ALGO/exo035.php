<?php
/*
Exercice 35 : 
    Ecrivez un algorithme constituant un tableau, à partir de deux 
    tableaux de même longueur préalablement saisis. Le nouveau 
    tableau sera la somme des élément des deux tableau de départ.
    tableau 1
        4 8 7 9 1 5 4 6
    tableau 2
        7 6 5 2 1 3 7 4
    tableau à constituer
        11 14 12 11 2 8 11 10

    Algorithme sum 2 array
    Var tab1, tab2, tab3, sum;
        Begining : 
            // initialisation of values
            tab1 <- array (4, 8, 7, 9, 1, 5, 4, 6)
            tab2 <- array (7, 6, 5, 2, 1, 3, 7, 4)
            tab3 <- array ()

            //for
            pour i allant de 0 à 8 par pas de 1 
                tab3[i] <- tab2[i] + tab1[i]

            //affichage 
            afficher : La somme des éléments des deux tableau est : tab3[0]| tab3[1]| tab3[2]| tab3[3]| tab3[4]| tab3[5]| tab3[6]| tab3[7] 
        fin
        

*/
            //inititalisation of values
            $tab1 = array(4, 8, 7, 9, 1, 5, 4, 6);
            $tab2 = array(7, 6, 5, 2, 1, 3, 7, 4);
            $tab3 = array();

            // for 
            for ($i=0; $i < 8 ; $i++) { 
                $tab3[$i] = $tab1[$i] + $tab2[$i];
            }
            
            //affichage
            echo " La somme des éléments des deux tableaux est : ".$tab3[0]."|".$tab3[1]."|".$tab3[2]."|".$tab3[3]."|".$tab3[4]."|".$tab3[5]."|".$tab3[6]."|".$tab3[7]."|";
?>