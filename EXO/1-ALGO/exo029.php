<?php
/*
Exercice 29: 
    Ecrire un algorithme qui demande un nombre, calcule et affiche la somme ...
    //la somme des n premiers cubes est le carré de la somme des n premiers entiers : 

    Algorithme somme n cube
    Var nb, sum, sumCub;
        begining
            nb <- entrer un nombre
            sum = 0
            for (i = 1; i <= nb; i++)
                sum = sum + i
            sumCub = sum * sum
            //Afficher 
            afficher le resultat de sumcub
        ending
*/
// déclaration de variable
            $nb = readline("entrer un nombre : ");
            $sum = 0;

            //boucle for
            if($nb > 0){
                for ($i = 1; $i<=$nb; $i++) 
                    $sum = $sum + $i;
            }elseif ($nb < 0) {
                for ($i = -1; $i >= $nb; $i--) {
                    $sum = $sum - $i;
                }
            }
                //calcul de sumCub
            if ($nb > 0) {
               $sumCub = $sum * $sum;
            }elseif ($nb < 0 ) {
                $sumCub = $sum * $sum * (- 1);
            }

            //affichage
           
            echo $sumCub; 
?>