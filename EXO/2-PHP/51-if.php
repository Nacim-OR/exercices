<?php

// Écrivez un bloc `if` qui affiche le message
// - `+` si `$var` est plus grand que 1
// - `-` si `$var` est plus petit que 1
// - `=` sinon

//réponse :
$var = rand(-10, 10);

if ($var > 1) {
    echo "+";
}elseif ($var < 1) {
    echo "-";
}else {
    echo "=";
}