<?php
/*
Exercice 5 : Créez un tableau multidimensionnel avec des informations sur des employés (nom, salaire, département). 
Utilisez une boucle foreach pour calculer la moyenne des salaires dans chaque département.

 

$employees = array(
    array("nom" => "Alice", "salaire" => 5000, "département" => "Ventes"),
    array("nom" => "Bob", "salaire" => 6000, "département" => "Ventes"),
    array("nom" => "Charlie", "salaire" => 7000, "département" => "RH"),
    array("nom" => "David", "salaire" => 5500, "département" => "RH")
);
*/
$employees = array(
    array("nom" => "Alice", "salaire" => 5000, "département" => "Ventes"),
    array("nom" => "Bob", "salaire" => 6000, "département" => "Ventes"),
    array("nom" => "Charlie", "salaire" => 7000, "département" => "RH"),
    array("nom" => "David", "salaire" => 5500, "département" => "RH")
);

$totalVent = 0;
$averageVente = 0;
$totalRH = 0;
$averageRH = 0;

foreach ($employees as $key => $value) {
    if ($value["département"] == "Ventes") {
        $totalVent += $value["salaire"];
        $averageVente = $totalVent / 2;
    }if ($value["département"] == "RH") {
        $totalRH += $value["salaire"];
        $averageRH = $totalRH / 2;
    }
}
echo "La moyenne des salaires du département Ventes est de : $averageVente"."euros\n";
echo "La moyenne des salaires du département RH est de : $averageRH"."euros";

?>
