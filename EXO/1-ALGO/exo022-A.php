<?php
/*
Exercice 22-A
    Ecrire un algorithme qui demande successivement 20 nombres 
    à l'utilisateur, et qui lui dit ensuite le plus grand parmis
    ces 20 nombres
    
    Algorithme 
    Var max;
        début 
            //initialisation 
            max <- 0
            //boucle 
            pour i allant de 0 à 20 par pas de 1
                ent <- demande de saisie de l'utilisateur
                a la premier saisie remplacer ma valeur max par ma saisie
                sinon si ma valeur de saisie est supérieur à la valeur max alors ma valeur max est égale à la valeur saisie

            // afficher
            le nombre le plus grand est : valeur max
        fin
*/
    // initialisation
    $max = 0;
    
    //saisie et boucle 
    for ($i = 0; $i < 20; $i++){ 
        $ent = readline("Entrer un nombre : ");
        if ($i == 0) {
            $max = $ent; 
        } elseif ($max < $ent) {
            $max = $ent;
        }
    }

    //Afficher
    echo "le nombre le plus grand est : ".$max;
?>