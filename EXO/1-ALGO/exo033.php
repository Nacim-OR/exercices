<?php
/*
Exercice 33 : 
    Ecrivez un algorithme permettant à l'utilisateur de saisir un 
    nombre quelques de valeurs, qui devront être stockées dans un 
    tableur. l'utilisateur doit donc commencer par entrer le nombre
    de valeur qu'il compte saisir. Il effectuera ensuite cette saisie.
    Enfin, une fois la saisie terminée, le programme affichera le nombre
    de valeurs négatives et le nombre de valeurs positives.

    Algorithme for array
    Var nbSaisie, nbNeg, nbPos, $tab;
        begining : 
            // initialisation of values
            nbSaisie <- Entrer le nombre de valeurs que vous souhaiter saisir 
            nbNeg <- 0
            nbPos <- 0
            tab <- array()

            //loop array if/else
            for i allant de 0 à nbsaisie par pas de 1
                affecter au tableau un nombre saisie a l'utilisateur
                    si le nombre affecter est negatif 
                        alors compter le nombre de nombres neg : nbNeg ++
                    sinon
                        affecter le nombre de nombre positive : nbPos++

            // affichage
            le nombre de valeurs négatives est de  = nbNeg
            saut de ligne 
            Le nombre de valeurs positive est de = nbPos
        Ending
*/
            // initialisation of values
            $nbSaisie = readline ("Entrer le nombre de valeurs que vous souhaiter saisir : ");
            $nbNeg = 0;
            $nbPos = 0;
            $tab = array();

            //loop array if/else 
            for ($i = 0; $i < $nbSaisie; $i++) { 
                $tab[$i] = readline (" Entrer un nombre : "); 
                if ($tab [$i] < 0) {
                    $nbNeg++;
                } else {
                    $nbPos++;
                }
            }
            
            //affichage
            echo "le nombre de valeurs négatives est de : ".$nbNeg;
            echo PHP_EOL; 
            echo "le nombre de valeurs positives est de : ".$nbPos;
        
?>