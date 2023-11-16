<?php
$temp = -INF;
$tab = array(4, 3, 19, 25, 5, 55, -9);

//loop if largest to smallest
for ($i=0; $i < 4 ; $i++) { 
        if ($tab[$i] > $tab[$i +1]) {
            $temp = $tab[$i + 1];
            $tab[$i +1] = $tab[$i];
            $tab[$i] = $temp;
            //print_r($tab);
        }
}for ($i=0; $i < 4 ; $i++) { 
    if ($tab[$i] > $tab[$i +1]) {
        $temp = $tab[$i + 1];
        $tab[$i +1] = $tab[$i];
        $tab[$i] = $temp;
        //print_r($tab);
       
    }
}for ($i=0; $i < 4 ; $i++) { 
    if ($tab[$i] > $tab[$i +1]) {
        $temp = $tab[$i + 1];
        $tab[$i +1] = $tab[$i];
        $tab[$i] = $temp;
        //print_r($tab);    
    }
    //echo "$tab[$i] | ";
}
for ($i=0; $i < count($tab) ; $i++) { 
      echo "$tab[$i] | ";
}
$tab = array(14, 3, 9, 2, 5);

for ($i=0; $i < count($tab) ; $i++) { 
    $temp = INF;
    for ($j= $i; $j < count($tab) ; $j++) { 
        if ($tab[$j] < $temp) {
            $temp = $tab[$j];
            $tab[$j] = $tab[$i];
            $tab[$i] = $temp;
        }
    }
}
    
?>