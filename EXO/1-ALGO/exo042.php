<?php
/*
Exercice 42 :
    Ecrire un algorithme triant un tableau par selection
        - on cherche l'élément de plus petite valeur dans le tableau
        - le placer en tête du tableau
        - recommencer avec le tableau moins la première case 
            Exemple 
                14 3 9 2 5 
                2 3 9 14 5
                2 3 5 14 9
                2 3 5 9 14 
    
    Algorithme sort from largest to smallest
    Var tab, temp;
        Begining
            // initialisation of values
            tab <- array (14, 3, 9, 2, 5)

            // loop if largest to smallest
            for (i = 0; i < count(tab) ; i++)
                temp <- INF
                for (j = i; j < count(tab); j++)
                    if (tab[j] < temp)
                        temp <- tab[j]
                        tab[j] <- tab[i]
                        tab[i] <- temp

            //display for
            for (i = 0; i < count(tab); i++)
                echo "tab[i] | "
            
        ending
*/
//initialisation of values
$tab = array(14, 3, 9, 2, 5);

//loop if largest to smallest
for ($i=0; $i < count($tab) ; $i++) { 
    $temp = INF;
    for ($j= $i; $j < count($tab) ; $j++) { 
        if ($tab[$j] < $temp) {
            $temp = $tab[$j];
            $tab[$j] = $tab[$i];
            $tab[$i] = $temp;
        }
    }
}

// display for
for ($i=0; $i < count($tab) ; $i++) { 
    echo "$tab[$i] | ";
}

?>