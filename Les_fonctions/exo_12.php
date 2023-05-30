<?php
require_once('../POO/Errorhandling.php');
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

function smallerArgs(int $arg1 = 0, int $arg2 = 0) : int {
    Errorhandling::errorArgc();
    if ($arg1 < $arg2)
        return ($arg1);
    else if ($arg1 > $arg2)
        return ($arg2);
    return (-1);
}

//smallerArgs(52, 21);
//echo smallerArgs(52, 21) . "\n";
//smallerArgs();
//smallerArgs(52);
//smallerArgs(52, 'str');
//smallerArgs([]);
//smallerArgs('');