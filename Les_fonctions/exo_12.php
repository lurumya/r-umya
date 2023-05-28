<?php
require_once('../Utils/ft_errors.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.5 | exo 12

Description :
Ecrire une fonction qui prendra 2 arguments 
et qui renverra le plus petit des 2

Explications :

Commentaires :

=====================================================================================
*/

function smallerArgs($arg1, $arg2) : ?int {
    errorArgc();
    if (func_num_args() !== 2) {
        echo 'wrong number of function arguments !' . "\n";
        exit(-1);
    }
    errorTypeArgInt($arg1, $arg2);
    if ($arg1 < $arg2) {
        return ($arg1);
    }
    else if ($arg1 > $arg2) {
        return ($arg2);
    }
    else {
        echo 'Egalité ou autre erreur !' . "\n";
        return null;
    }
}

//echo smallerArgs(52, 21);