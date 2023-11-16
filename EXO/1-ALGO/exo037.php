<?php
/*
Exercice 37 :
    Ecrivez un algorithme qui permette la saisie d'un nombre
    quelconque de valeurs. Toutes les valeurs doivent être ensuite
    augmentées de 1, et le nouveau tableau sera affiché à l'écran

    Algorithme array for
    Var tab, tab2, nbSaisie;
        Begining 
            //Initialisation of values
            nbSaisie <- Entrer le nombre de valeurs que vous souhaiter saisir
            tab <- array()
            tab2 <- array()

            // calcul 
            for (i= 0; i < nbSaisie; i++)
                tab[i] = Entrer un nombre
                for (j = 0; j <= i; j++)
                    tab2[j] = tab[j] + 1
            
            // affichage
            for (i = 0; i < count(tab2); i++)
                afficher tab2[i]." "
            
        fin
*/
            // initilisation of values
            $nbSaisie = readline ("Entrer le nombre de valeurs que vous souhaiter saisir : ");
            $tab = array();
            $tab2 = array();

            //calcul
            for ($i = 0; $i < $nbSaisie; $i++) { 
                $tab[$i] = readline (" Entrer un nombre : ");
                for ($j = 0; $j <= $i ; $j++) { 
                    $tab2[$j] = $tab[$j] + 1;
                }
            }
            for ($i=0; $i < count($tab2) ; $i++) { 
                echo $tab2[$i]." ";
            }
?>