<?php

/*

écrire une fonction nommée `adresse` qui :

- prend un paramètre nommé `$numero`
- prend un paramètre nommé `$rue`
- prend un paramètre nommé `$code_postal`
- prend un paramètre nommé `$ville`
- concatène (met bout à bout, chaîne) tous les paramètres en les séparant d'une virgule suivie d'un espace `', '`
- renvoit le paramètre

appelez cette fonction avec quatre paramètres de votre choix et affichez le résultat

*/

//réponse 

// function adresse ($numero, $rue, $code_postal, $ville) : string{
//     return $numero.", ".$rue.", ".$code_postal.", ".$ville;
// }

// $resultat = adresse('42', 'rue du marechal joffre', '62220', 'CARVIN');
// echo $resultat;

// autre réponse 
function adresse($numero, $rue, $code_postal, $ville) : void{
    echo $numero.", ".$rue.", ".$code_postal.", ".$ville;
}

adresse('42', 'rue du maréchal joffre', '62220', 'Carvin');
