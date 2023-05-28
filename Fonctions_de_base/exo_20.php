<?php
require_once('../POO/Errorhandling.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.8 | exo 20

Description :

Explications :
Ecrire une fonction qui retourne vrai et prend en paramètre une string 
si la chaîne contient « Rumya » (à écrire avec les fonctions de base php)

Commentaires :

=====================================================================================
*/

function strIsRumya($str) : bool {
    Errorhandling::errorArgc();
    if (func_num_args() !== 1) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorTypeArgStr($str);
    Errorhandling::errorEmptyArg($str);
    if (strcmp($str, 'Rumya') === 0)
        return true;
    return false;
}

//var_dump(strIsRumya('RuMya'));
//var_dump(strIsRumya(''));
//var_dump(strIsRumya('RuMya', 'str'));
//var_dump(strIsRumya(59));

