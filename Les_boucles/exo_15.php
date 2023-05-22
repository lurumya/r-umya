<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.7 | exo 15

Description :
Remplir un tableau avec 10 nombres aléatoires différents.
Vérifier ensuite si 42 est présent dans le tableau.

Explications :

Commentaires :
$j permet d'utiliser cette valeur (un peu comme le retour d'une fonction). 
Ainsi, si $j est plus grand que 0, alors 42 est présent au moins une fois.
=====================================================================================
*/

$i = 0;
$j = 0;
while ($i <= 9) {
    #$tab[$i] = rand();
    $tab[$i] = rand(30, 50);
    if ($tab[$i] === 42)
        $j++;
    //echo $i . " = " . $tab[$i] . "\n";
    $i++;
}

//echo $j . "\n";

