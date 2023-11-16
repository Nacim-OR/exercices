<?php
/*
Exercice 8 : Créez un tableau de dates de naissance.
Utilisez une boucle foreach pour afficher l'âge de chaque personne en années.
$birthdays = array("1990-05-15", "1985-12-10", "1998-03-25");
*/
$birthdays = array("1990-05-15", "1985-12-10", "1998-03-25");

//answer 1

foreach ($birthdays as $date) {
    $age = date("Y") - substr($date,0,4);
    if (date("md") < date("md",strtotime($date))) {
        $age = $age - 1;
    }
    echo "Votre age est de : ".$age."ans"."\n";
}

// answer 2
$birthdays = array("1990-05-15", "1985-12-10", "1998-03-25");

$today = date("Y-m-d");

foreach ($birthdays as $date) {
    $age = date_diff(date_create($date), date_create($today));
    echo 'Votre age est '.$age->format('%y')."\n";
}

?>