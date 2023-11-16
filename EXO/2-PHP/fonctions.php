<?php

// Écrivez une fonction qui affiche la date du jour
// NOTE : la date du jour peut être récupérée en faisant l'appel de fonction suivant :

$date = date('d/m/Y');


//réponse 
function date_du_jour(): void{
    echo date('d/m/Y');
}

date_du_jour();