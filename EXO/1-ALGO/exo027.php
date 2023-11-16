<?php
/*
Exercice 27
    Ecrire un algorithme qui permet de donner le resultat 
    d'un étudiant à un module sachant que ce module est sanctionné 
    par une note d'oral de coefficient 1 et une note d'écrit de 
    coefficient 2. La moyenne obtenue doit être supérieur ou égale à
    10 pour valider le module.

    algorithme average
    Var nt1, nt2, aver;
        begining : 
            // initialisation des valeurs
            nt1 <- entrer votre note d'orale
            nt2 <- entrer votre note d'écrit
            aver <- (nt1 + (nt2 * 2)) / 3

            // condition
            si aver => 10 
                afficher : félicitation vous avez validé votre module.
            sinon
                afficher : désolé vous n'avez pas validé votre module.
        ending
*/     
        // déclaration valeur
        $nt1 = readline("Entrer votre note d'orale : ");
        $nt2 = readline("Entrer votre note d'écrit : ");
        $aver = ($nt1 + ($nt2 * 2)) / 3;

        // loop
        if ($aver >= 10 ) {
            echo "Félicitation vous avez validé votre module.";
        } else {
            echo "Désolé vous n'avez pas validé votre module";
        }
        

?>