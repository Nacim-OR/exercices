<?php
/*
Exercice 13 : 
    Ecrire un algorithme qui demande un nombre à un utilisateur, 
    et l'informe ensuite si ce nombre est positif ou négatif 
    (on laisse de côté le cas où le nombre vaut zéro)

    Algorithme condition
    Var NU;
        début 
            // entrée un nombre
            NU <- nombre entrée par l'utilisateur
            if NU > 0
                "ce nombre est psositif"
            Else "nombre négatif"
        fin
*/
        $nu = readline("Entrer un nombre pour savoir s'il est positif ou négatif : ");

        if ($nu > 0) {
                echo "nombre positif";
            } else {
                echo "nombre négatif";
        }

?>