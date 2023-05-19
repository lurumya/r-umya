<?php

// Ecrire une fonction qui prend en paramètre une string et retourne 
// le premier caractère en majuscule (à écrire avec les fonctions de base php)

//Il est important de noter que PHP ne différencie pas les chaînes de caractères d'une longueur supérieure à 1 des chaînes de caractères d'une longueur de 1. Elles sont toutes considérées comme des chaînes de caractères (strings).

function str_to_char($str) : string {
    return strtoupper($str);
}


//$i = str_to_char("salut");
//echo $i;