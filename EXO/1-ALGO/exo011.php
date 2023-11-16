<?php
    /* Exercice 11 :
        Ecrire un programme qui demabde un nombre à l'utilisateur,
        puis qui calcule et affiche le carré de ce nombre.

    Algorithme carré d'un nombre

    Var Val, Carre : entier;
        Début : 
            //Entrer d'un nombre par utilisateur 
                Val <- donnée utilisateur (readline);
            // opération
                Carre <- val * val;
            // afficher 
                afficher(carre);
        fin
            Val <- donnée utilisateur;
            Carrée <- Val * Val;

*/
    $val = readline("Entrer un nombre");
    $carre = $val * $val;

    echo "Carrée = ".$carre;
    



?>