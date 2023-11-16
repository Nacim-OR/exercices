<?php

/*Inputs :
    $placesList -> tab to list all the places in the class; max size : 16
    $studentsList -> tab to list all students
    return an array [K,V] ex: [[PLACE_1] => "JEREMY", [PLACE_2] => "LORENA"]  
*/
function createStudentLocations(array $placesList, array $studentsList) : array{
    if (sizeof($placesList) == sizeof($studentsList)) {
        $studentsLocations = array_combine($placesList, $studentsList);
        return $studentsLocations;
    }
    if ($placesList > $studentsList) {
        while (sizeof($placesList) > sizeof($studentsList)) {
        array_push($studentsList, "");
    }
    $studentsLocations = array_combine($placesList, $studentsList);
    return $studentsLocations;
    }
    if ($placesList < $studentsList) {
        while (sizeof($placesList) < sizeof($studentsList)) {
            array_pop($studentsList);
        }
    $studentsLocations = array_combine($placesList, $studentsList);
    return $studentsLocations;
    }   
}
/*
    $studentsLocations array [K,V] ex: [[PLACE_1] => "JEREMY", [PLACE_2] => "LORENA"]  
    return the same array shuffled; only values will be randomized 
*/ 
function shuffleLocations(array $studentsLocations) : array{
    $keys = array_keys($studentsLocations);
    $values = array_values($studentsLocations);
    shuffle ($values);
    $studentsLocations = array_combine($keys, $values);
    return $studentsLocations;
}
    

        


/*
    save  $studentsLocations to CSV format.
    fileName to backup is : csv_backup_DDMMYYYY_HH:MM:SS.csv 
*/
function saveToCSVFile(array $studentsLocations):void{
    $d = date_create();
    $var = date_format($d, 'd-m-Y_H-i-s');
    $namefile = "csv_backup_$var.csv";
    $way = fopen('../CSV_Backups/'.$namefile,"w") ;
    fputcsv($way, array("PLACES","Prenom"),";","\n");
    foreach ($studentsLocations as $key => $value) {
        fputcsv($way, array($key, $value),";","\n");
    };
    fclose($way);
};



/*
    Retrieve the table from the .csv file into an array displayable in the console

*/
function csvFileToArray (string $pathFile) : array{
    $file = fopen ($pathFile, "r");

    for ($i = 0; $i<count(file("$pathFile")); $i++) {
       $line[] = fgetcsv($file, 500, ";");
    }

    fclose($file);

    return $line;
}

/*


*/
function getColumnsFromCsv(string $pathFile, int $selectCol) : array{
    $file = fopen ($pathFile, "r");

    for ($i = 0; $i <= count(file("$pathFile"))-1; $i++) {
       $tabCSV[] = fgetcsv($file, 500, ";");
    }

    fclose($file);

    foreach ($tabCSV as $line) {
        if ($selectCol == 0 ) {
           $newTab[] = [$line[0], ] ; 
        }elseif ($selectCol < 0) {
            $newTab = $tabCSV;
        }elseif ($selectCol < count($tabCSV[0])) {
            $newTab[] = [$line[0], $line[$selectCol]];
        }elseif($selectCol >= count($tabCSV[0]))  {
            $newTab = array();
        } 
        }
        return $newTab;
        }
    

?>