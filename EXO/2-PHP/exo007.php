<?php
/*
Exercice 7 : Créez un tableau de dates (au format "YYYY-MM-DD").
Utilisez une boucle foreach pour déterminer la date la plus ancienne dans le tableau.

$dates = array("2023-05-10", "2022-12-15", "2024-02-20", "2021-08-05");
*/
$dates = array("2023-05-10", "2022-12-15", "2021-08-05","2024-02-20");

//answer 1
$temp = 0 ;
foreach ($dates as $element) {
    $temp = min($dates);
}
echo "La date la plus ancienne est : $temp\n";

//answer 2
$oldDate = INF;

foreach ($dates as $element) {
    if ($oldDate > $element) {
        $oldDate = $element;
    }
}
echo "La date la plus ancienne est : $oldDate\n";

?>