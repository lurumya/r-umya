<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.7 | exo 16

Description :
Qu’affichent les echos ?

Explications :

Commentaires :
=====================================================================================
*/

$i = 0;
while ($i < 10) {
    $i++;
}
echo $i;
// Affiche 10 -> ici il peut y avoir une confusion puisqu'on commence à zéro. 


$i = 0;
do {
    $i++;
} while ($i < 10);
echo $i; // La principale caractéristique de la boucle do while est que php va DS TOUS LES CAS entrer
// une fois dans la boucle, ce qui n'est pas le cas avec une boucle while. Ici le résultat est 10.


$i = 10;
do {
    $i++;
} while ($i < 10);
echo $i; // Ici on entre une première fois dans le "do". Ensuite $i qui est égal à 10 et incrémenté de 1, 
// ce qui nous donne 11. Et pour finir, 11 n'est pas plus petit que 10 alors on sort de la boucle.
// Résultat = 11.
