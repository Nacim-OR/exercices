<?php
include_once "../M/lib_functions.php";

$pathFile = '../CSV_Backups/testemulticol.csv';
$selectcol = readline ("select columns : ");
$pathFile = getColumnsFromCsv ($pathFile, $selectcol);

print_r($pathFile);


?>