<?php
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

function strFirstCharUp($str) : string {
    return ucfirst($str[0]);
}

 
//echo strFirstCharUp("abc");