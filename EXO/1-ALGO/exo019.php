<?php
/*
Exercice 19 
    Ecrire un algorithme qui demande un nombre de départ, 
    et qui ensuite affiche les dix nombres suivants. Par 
    exemple, si l'utilisateur entre le nombre 17, le programme
    affichera les nombres de 18 à 27.

    Algorithme boucle for
    Var nb;
        début 
            // déclaration de la variable
                NB <- demande à l'utilisateur un nombre

            //calcul
                for ($i = $nb +1 ; $i < $nb + 11 ; $i++ )
            
            // affichage 
                echo $i." ";
        fin
*/
    //déclaration
        $nb = readline("entrer un nombre : ");
    
    //boucle for
        for ($i = $nb + 1  ; $i < $nb + 11 ; $i++) {
            //affichage 
            echo $i." ";
        }

?>