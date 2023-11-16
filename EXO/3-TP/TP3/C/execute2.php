<?php
include_once "../M/lib_functions.php";

$pathFile = '../CSV_Backups/csv_backup_02-11-2023_11-37-17.csv';

$pathFile = csvFileToArray($pathFile);
 
print_r ($pathFile);

?>