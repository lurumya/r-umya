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

function getAreaTriangle(int $base = 0, int $height = 0) : float {
    Errorhandling::errorArgc();
    return (($base * $height) / 2);
}

//echo getAreaTriangle(5, 3);
//getAreaTriangle(5, 3, 5);
//getAreaTriangle(5);
//getAreaTriangle('str');
//getAreaTriangle(5, 'str');
//getAreaTriangle();
//getAreaTriangle('');