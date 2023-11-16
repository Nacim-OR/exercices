<?php
/*
Exercice 5 : Créez une fonction nommée "genererMotDePasse" qui génère un mot de passe aléatoire de longueur donnée. 
Le mot de passe doit contenir des lettres majuscules, des lettres minuscules et des chiffres.
// Exemple d'utilisation :
$resultat = genererMotDePasse(8); // Exemple de mot de passe généré : "aB3x7Kp2"
*/

//answer


function genererMotDePasse (Int $num) : mixed {
    $alph = "abcdefghijklmnpqrstuvwxyz";
    $alph2= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $string ='';
    for ($i=0;$i< 200 ;$i++){
        $string .= $alph[rand(0,strlen($alph)-1)].$alph2[rand(0,strlen($alph2)-1)].rand(0,9);
    }
    $resultat = substr($string, 0, $num);
    return $resultat;
}

$num = readline("Entrer un chiffre entre 3 et 200 : ");
$resultat = genererMotDePasse($num);
echo $resultat;





?>