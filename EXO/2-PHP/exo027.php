<?php
/*
Exercice 7 : Conversion de date en format lisible
Description : Écrivez un script PHP qui prend une date au format "Y-m-d" en entrée et 
utilise la fonction native date() pour convertir la date en un format lisible, puis l'affiche.
*/

//answer
// $today = date("Y-m-d");
// echo date_format($today,"d l F \of Y");
$day = "2023-12-07";
echo date("d l F \of Y");
?>