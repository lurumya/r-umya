<?php
require_once('../POO/Errorhandling.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.10 | exo 24

Description :
Ecrire une fonction qui prend en paramètre la base et la hauteur 
(entiers) d’un triangle et renvoie son aire (aire = base*hauteur/2)

Explications :

Commentaires :

=====================================================================================
*/

function getAreaTriangle($base = 0, $height = 0) : float {
    Errorhandling::errorArgc();
    if (func_num_args() !== 2) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorEmptyTwoArg($base, $height);
    Errorhandling::errorTypeArgInt($base, $height);
    return (($base * $height) / 2);
}

//getAreaTriangle(5, 3);
//getAreaTriangle(5, 3, 5);
//getAreaTriangle(5);
//getAreaTriangle('str');
//getAreaTriangle(5, 'str');
//getAreaTriangle();
//getAreaTriangle('');