<?php
/*
Exercice 22-B
    Modifier ensuite l'algorithme pour le programe affiche 
    de surcrôit en quelle position avait été saisie ce nombre
    
    Algorithme 
    Var max, pos;
        début 
            //initialisation 
            max <- 0
            pos <- 0
            //boucle 
            pour i allant de 1 à 20 par pas de 1
                ent <- demande de saisie de l'utilisateur
                a la premier saisie remplacer ma valeur max par la saisie
                pos prend la valeur de l'itération
                sinon si ma valeur de saisie est supérieur à la valeur max alors ma valeur max est égale à la valeur saisie
                pos prend la valeur de l'itération

            // afficher
            le nombre le plus grand est : valeur max a la position (pos)
        fin
*/
    // initialisation
    $max = 0;
    $pos = 0;
    //saisie et boucle 
    for ($i = 1; $i <= 20; $i++){ 
        $ent = readline("Entrer un nombre : ");
        if ($i == 0) {
            $max = $ent; 
            $pos = $i;
        } elseif ($max < $ent) {
            $max = $ent;
            $pos = $i;
        }
    }

    //Afficher
    echo "le nombre le plus grand est : ".$max." à la position : ".$pos;
?>