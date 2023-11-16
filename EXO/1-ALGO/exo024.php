<?php
/*
Exercice 24
    Les habitants de paris paient l'impôt selon les règles suivantes :
        - Les hommes de plus de 20ans paient l'impot
        - Les femmes paient l'impot si elles ont entre 18 & 35 ans
        - Les autres ne paient pas d'impot
    Le programme demandera donc l'âge et le sexe du parisient, et se prononcera 
    donc ensuite sur le fait que l'habitant est imposable.

    Algorithme tax
    Var age, sex;
        debut 
            //enter values
            $age <- enter age
            $sex <- enter h for men & f for woman

            //calcul
            if ((age > 20 && sex == "h") || ((18 < age > 35) && sex == f))
                Afficher "Congratulation !!!!! Vous êtes imposables."
            else
                Afficher "vous le vivez bien de profiter de la France ?".
        fin

*/
//initialisation
$age = readline("Entrer votre âge : ");
$sex = readline("Entrer h pour Homme & f pour Femme : ");
    //calcul
    if (($age > 20 && $sex == "h") || (($age > 18 && $age < 35) && $sex == "f")) {
        echo "Congratulation !!!!! Vous êtes imposables ";
    } else {
        echo "Vous le vivez bien de profiter de la France ?";
    }
?>
