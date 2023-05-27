<?php
require_once('../POO/Errorhandling.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.10 | exo 26

Description :
Ecrire une fonction qui renvoie true si le nombre 
envoyé en paramètre est pair, false sinon.

Explications :

Commentaires :

=====================================================================================
*/

function checkEvenNumber(int $nbr) : ?bool {
    if (Errorhandling::errorArgc() === -1)
        return null;
    if (func_num_args() !== 1) {
        echo 'Wrong parameters number !' . "\n";
        return null;
    }
    if (is_int($nbr) === false) {
        echo 'There is a value that isn\'t a integer !' . "\n";
        return null;
    }
    if ($nbr % 2 !== 0)
        return false;
    elseif ($nbr % 2 === 0)
        return true;
    else
        return null;
}

//checkEvenNumber(25);
//var_dump(checkEvenNumber(25));