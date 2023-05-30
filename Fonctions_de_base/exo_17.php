<?php
require_once('../POO/Errorhandling.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.8 | exo 17

Description :
Ecrire une fonction qui prend en paramètre une string et retourne 
le premier caractère en majuscule (à écrire avec les fonctions de base php)

Explications :

Commentaires :

=====================================================================================
*/

function strFirstCharUp(string $str = '') : string {
    Errorhandling::errorArgc();
    return (ucfirst($str[0]));
}

//strFirstCharUp('abc');
//strFirstCharUp('abc', 5);
//echo strFirstCharUp(5);   ??
//strFirstCharUp();
//strFirstCharUp('');
//strFirstCharUp([]);

//echo strFirstCharUp('abc') . "\n";
//echo strFirstCharUp('') . "\n";
//echo strFirstCharUp(45) . "\n";
//echo strFirstCharUp('salut', 'test') . "\n";