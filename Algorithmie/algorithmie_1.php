<?php

// Ecrire une fonction qui prend en paramètre la base et la hauteur 
// (entiers) d’un triangle et renvoie son aire (aire = base*hauteur/2)

function getAreaTriangle($base, $height) : float {
    return (($base * $height) / 2);
}

//echo getAreaTriangle(5, 3);
