<?php
/*
Exercice 32 : 
    Ecrire un algorithme qui déclare un tableau de 9 notes,
    dont on fait ensuite saisir les valeurs par l'utilisateur.

    Algorithme array
    Var, nb1, nb2, nb3, nb4, nb5, nb6, nb7, nb8, nb9;
        Début 
        //initialisation des variables 
        nb1 <- Entrer votre note : 
        nb2 <- Entrer votre note : 
        nb3 <- Entrer votre note : 
        nb4 <- Entrer votre note : 
        nb5 <- Entrer votre note : 
        nb6 <- Entrer votre note : 
        nb7 <- Entrer votre note : 
        nb8 <- Entrer votre note : 
        nb9 <- Entrer votre note : 

        //array
        tab  <- array ();
        tab[0] <- nb1;
        tab[1] <- nb2;
        tab[2] <- nb3;
        tab[3] <- nb4;
        tab[4] <- nb5;
        tab[5] <- nb6;
        tab[6] <- nb7;
        tab[7] <- nb8;
        tab[8] <- nb9;

        //affichage
        afficher vos notes sont : tab[0] tab[1] tab[2] tab[3] tab[4] tab[5] tab[6] tab[7] tab[8] 
    fin



*/  
    // initialisation des variables
    $nb1 = readline("Entrer votre note : ");
    $nb2 = readline("Entrer votre note : ");
    $nb3 = readline("Entrer votre note : ");
    $nb4 = readline("Entrer votre note : ");
    $nb5 = readline("Entrer votre note : ");
    $nb6 = readline("Entrer votre note : ");
    $nb7 = readline("Entrer votre note : ");
    $nb8 = readline("Entrer votre note : ");
    $nb9 = readline("Entrer votre note : ");

    // array
    $tab = array ();
    $tab [0] = $nb1;
    $tab [1] = $nb2;
    $tab [2] = $nb3;
    $tab [3] = $nb4;
    $tab [4] = $nb5;
    $tab [5] = $nb6;
    $tab [6] = $nb7;
    $tab [7] = $nb8;
    $tab [8] = $nb9;

    //affichage
    echo "Vos notes sont : ".$tab[0]." ".$tab[1]." ".$tab[2]." ".$tab[3]." ".$tab[4]." ".$tab[5]." ".$tab[6]." ".$tab[7]." ".$tab[8];


?>