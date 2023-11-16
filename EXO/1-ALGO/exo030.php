<?php
/*
Exercice 30
    Donnez le resultat de la multiplication de deux nombres
    en ne faisant que des additions.

    Algorithme produit en expression de somme
    Var nb1, nb2, sum;
        début
            //initialisation des valeurs
            nb1 <- entrer un nombre
            nb2 <- entrer un nombre
            sum <- 0 

            // loop for
            for (i = 0 ; i < nb2 ; i++)
                sum = sum + nb1

            //affichage
            afficher sum
        ending

    // pour i allant de 0 à nb2 par pas de 1 alors tu ajoutes nb1 à la sum (qui part de 0 à l'iniatialisation)
    //exemple : (nb1 = 2 et nb2 = 4)  pour i allant de 0 à 4 (0 <= i > 4)  par pas de 1 alors :
        1) i = ?    nb1 = 2     nb2 = 4     sum = 0
        2) i = 0    nb1 = 2     nb2 = 4     sum = 0 + 2 = 2
        3) i = 1    ""          ""          sum = 2 + 2 = 4
        4) i = 2    ""          ""          sum = 4 + 2 = 6
        5) i = 3    ""          ""          sum = 6 + 2 = 8
                2 x 4 = 8 et sum = 8   le resultat est correct
*/
    //initialisation des variables
            $nb1 = readline("Entrer un nombre : ");
            $nb2 = readline("Entrer un nombre : ");
            $sum = 0;

            //loop for
            if ($nb1 <= 0) {
                for ($i = 0; $i < $nb2 ; $i++) { 
                    $sum = $sum + $nb1;
                    }
            }elseif ($nb1 < 0 && $nb2 < 0) {
                for ($i = -1; $i > $nb1 ; $i--) { 
                    $sum = $sum + $nb2; 
                    
                    } 
            }elseif ($nb2 <= 0) {
                for ($i = 0; $i < $nb1 ; $i++) { 
                    $sum = $sum + $nb2;
                    }
            }elseif ($nb1 > 0 && $nb2 > 0) {
                for ($i = 0; $i < $nb2 ; $i++) { 
                    $sum = $sum + $nb1;
                    }
            }

                

            // Affichage
            echo "Le resultat est : ".$sum;
?>
