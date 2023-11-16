<?php
/* include path the the lib_functions file */
include_once "../M/lib_functions.php";

/* session initialisation */
session_start();

/* récupération du fichier dans les fichier temporaire  */
$pathFile = $_FILES ["file"]["tmp_name"];

/* selecteur de colonne*/
if ($_POST ["col"] == 1 ) {
    $selectCol = 1;
}elseif ($_POST["col"] == 2) {
    $selectCol = 2;
}elseif ($_POST["col"] == 3) {
    $selectCol = 3;
}


/* création du tableau à partir du ficher CSV*/
$studentsLocations = getColumnsFromCsv ($pathFile, $selectCol);


/* start of session of studentsLocations */
 $_SESSION["studentsLocations"] = $studentsLocations;

/* send to page displayShuffle.php (view) */
header('Location: ../V/displayShuffleCSV.php');
?>