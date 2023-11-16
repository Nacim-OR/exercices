<?php

/*

traduire les blocs conditionnels `if` en blocs conditionnels `switch`

résultat attendu :
vous êtes sur la page d'accueil

*/

$page = "home";

/*if ($page == 'about') {
    echo 'vous êtes sur la page « à propos »';
    echo PHP_EOL;
} else if ($page == 'contact') {
    echo 'vous êtes sur la page « contact »';
    echo PHP_EOL;
} else if ($page == 'home') {
    echo 'vous êtes sur la page d\'accueil';
    echo PHP_EOL;
} else {
    echo 'page non trouvée :(';
    echo PHP_EOL;
}*/

// réponse 
switch ($page) {
    case $page == "about":
        echo "vous etes sur la page A PROPOS \n";
        break;
    case $page == "contac":
        echo "vous etes sur la page CONTACT \n";
        break;
    case $page == "home" :
        echo "vous etes sur la page ACCUEIL \n";
        break;
    default:
        echo "page non trouvée :( désolé \n";
        break;
}
