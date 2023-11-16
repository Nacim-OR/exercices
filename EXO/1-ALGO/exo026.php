<?php
/*
Exercice 26 : 
    Saisir 3 entier a, b, c et determiner dans R les racines 
    de l'équation ax² + bx + c = 0

    Algorithme if/elseif/else
    Var a, b, c, delta;
        begining : 
            //declaration des variables
            a <- entrer un nombre entier a différent de 0
            b <- enrter un nombre entier b
            c <- entrer un nombre entier c
            delta <- (b * b) -4 * (a * c)

            // loop
            if (delta > 0)
                x1 = (-b - sqrt(delta)) / (2 * a)
                x2 = (-b + sqrt(delta)) / (2 * a)
                afficher x1 et x2 dans le cas ou delta > 0
            elseif (delta == 0)
                x0 = -(b / (2 * a))
            else 
                afficher l'équation n'a pas sollution réelle.
        ending
            
*/
        $a = readline("Entrer un nombre entier a et différent de 0 : ");
        $b = readline("Entrer un nombre entier b : ");
        $c = readline("Entrer un nombre entier c : ");
        echo PHP_EOL;
        echo "pour résoudre connaitre les valeurs de X. ";
        echo PHP_EOL;
        $delta = ($b * $b) - 4 * ($a * $c);
        echo "delta est égale à : ".$delta;
        echo PHP_EOL;
        if ($delta > 0 ) {
            $x1 = (-$b - sqrt($delta) ) / (2 * $a);
            $x2 = (- $b + sqrt($delta)) / (2 * $a);
            echo "Dans le cas ou delta est supérieur à 0 alors  ";
            echo " la racine X1 est égale à : ".$x1;
            echo PHP_EOL; 
            echo "la racine X2 est égale à :  ".$x2;
        }elseif ($delta == 0) {
            $x0 = -($b / (2 * $a));
            echo "Dans le cas ou delta est égale à 0 alors la racine X0 est égale à :  ".$x0;
        }else {
            echo " l'équation ax² + bx + c = 0 n'a pas de sollution réelle.";
        }

?>