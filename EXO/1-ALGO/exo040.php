<?php
/*
Exercice 40
    Soit un tableau T à deux dimensions (12,8) préalablement rempli 
    de valeurs numériques. Ecrire un algorithme qui recherche la plus
    grande valeur au sein de ce tableau.

    Algorithme multidimensional array 
    Var valMax, tab;
        Begining
            // initialisation of values 
            valMax <- -infini
            tab <- array (
                array ( 0, 1, 2, 3, 4, 5, 6,7, 8, 9, 10, 11)
                array(12, 13, 14, 15, 16, 17, 18, 19, 20)

            // double loop if
            for (i = 0; i < sizeof(tab); i++)
                for (j = 0; j < sizeof(tab[i]); j++)
                    if (tab[i][j] > valMax)
                        valMax = tab[i][j]
            // display
            echo "La valeur max est : valMax"
        ending
*/
        // initialisation of values
        $valMax = -INF ;
        /*$pos =0 ;
        $pos2 = 0;
        */
        $tab =  array(
            array (10, 12, 5 , 3, 53, 125, 146478, 2,3),
            array( 45, 3, 25, 1, 1412, 4464978, 99999, 7),
            array (100, 1256, 5 , 3, 53, 125, 14678, 2,3),
            array (10, 12, 53 , 35, 53, 125, 1478, 2,3),
            array (20, 12, 5 , 3, 53, 125, 14, 2,3),
            array (15, 12, 5 , 3, 53, 125, 146, 2,3),
            array (1, 12, 5 , 3, 53, 125, 146478, 2,3),
            array (10, 12, 5 , 3, 53, 125, 146478, 2,3),
            array (170, 172, 5 , 3, 53, 125, 78, 2,3),
            array (10, 152, 5 , 3, 53, 125, 1647, 2,3),
            array (10, 12, 56 , 3, 53, 125, 6478, 2,3),
            array (10, 12, 5 , 63, 53, 125, 146478, 2,3),
            array (10, 12, 75 , 36, 53, 125, 146478, 2,3)

        );  

        //double loop if
        for ($i=0; $i < sizeof($tab); $i++) { 
            for ($j=0; $j < sizeof($tab[$i]) ; $j++) { 
                if ($tab[$i][$j] > $valMax) {
                    $valMax = $tab[$i][$j] ;
                    //$pos = $i;
                    //$pos2 = $j;
                }
            }
        }
        //echo "La valeur max est : $valMax à la ligne $pos dans la colonne $pos2";
        echo "La valeur max est : $valMax";
?>
            