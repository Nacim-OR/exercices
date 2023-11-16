<?php
/*
Exercice 18 : 
    Ecrire un algorithme qui demande l'age d'un enfant à l'utilisateur.
    Ensuite, il l'informe de sa catégorie :
            - "Poussin" de 6 à 7 ans
            - "Pupille" de 8 à 9 ans
            - "Minime" de 10 à 11 ans
            - "Cadet" après 12 ans
    Peut-on concevoir plusieurs algorithme équivalents menant à se résultat ? 

    Algorithme conditionnel 
    Var AGE:
        début : 
            AGE <- l'utilisateur saisie l'âge de son enfants entre 3 et 15ans pour connaitre sa catégorie
            if (AGE < 6 )
                    afficher "Votre enfant n'a pas l'âge recquis"
                elseif (AGE >= 6 and AGE =< 7)
                    afficher "Votre enfant est dans la catégorie Poussin"
                elseif (AGE >= 8 and =< 9)
                    afficher "Votre enfant est dans la catégorie Pupille"
                elseif (AGE >= 10 and AGE =< 11)
                    afficher "Votre enfant est dans la catégorie Minime"
                elseif (AGE >= 12 and AGE < 18)
                    afficher "Votre enfant est dans la catégorie Cadet"
                else
                    afficher "Catégorie Adulte"
            endif   
        end 
*/
        //variable
        $age = readline("Entrer l'âge de votre enfant pour connaitre sa catégorie : ");

        //condition
        if ($age < 6) {
                echo "Votre enfant n'a pas l'âge recquis";
            } elseif ($age >= 6 && $age <= 7) {
                echo "votre enfant est dans la catégorie Poussin";
            } elseif ($age >= 8 && $age <= 9) {
                echo "votre enfant est dans la catégorie Pupille ";
            } elseif ($age >= 10 && $age <= 11) {
                echo "votre enfant est dans la catégorie Minime";
            } elseif ($age >= 12 && $age < 18) {
                echo "votre enfant est dans la catégorie Cadet";
            } else {
                echo "Catégorie adulte";
    }


?>
