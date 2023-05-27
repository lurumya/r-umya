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

function getAreaTriangle(int $base, int $height) : ?float {
    if (Errorhandling::errorArgc() === -1)
        return null;
    if (func_num_args() !== 2) {
        echo 'Wrong parameters number !' . "\n";
        return null;
    }
    return (($base * $height) / 2);
}

getAreaTriangle(5, 3);