<?php
/*
Exercice 38 : 
    Ecrivez un algorithme permettant, toujours sur le même principe, à 
    l'utilisateur de saisir un nombre déterminé de valeur. Le programme, 
    une fois la saisie terminée, renvoie la plus grande valeurs précisant
    quelle position elle occupe dans le tableau. On prendra soin d'effectuer 
    la saisie dans un premier temps, et la recherche de la plus grande valeur
    du tableau dans un second temps.

    Algorithme array for 
    Var nbSaisie, tab, val, valMax, key;
        Begining 
            //initialisation of values
            nbSaisie <- Entrer le nombre de valeurs de vous souhaiter saisir 
            tab <- array()
            val <- 1
            valMax <- 0
            pos <- 0

            // loop / if
            for (i = 0; i < nbSaisie ; i++)
                val  <- entrer le nombre
                if (valMax < val)
                    valMax <- val
                    pos <- i
                tab[] <- val

            //display
            afficher : la valeur la plus haute est valMax à la position key

        ending
            
*/
            // initialisation of values
            $nbSaisie = readline ("Entrer le nombre de valeurs que vous souhaiter saisir : ");
            $tab = array();
            $val = 1;
            $valMax = 0;
            $pos = 0;
            //loop / if
            for ($i = 1; $i <= $nbSaisie; $i++) { 
                $val = readline (" Entrer un nombre :  "); 
                $tab[] = $val;
                if ($valMax < $val) {
                    $valMax = $val;
                    $pos = $i;
                }
            }
            //display
            echo "La valeur la plus haute est $valMax à la position $pos";  

?>