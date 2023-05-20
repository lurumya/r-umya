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
echo $i . "\n";

$i = 0;
do {
    $i++;
} while ($i < 10);
echo $i . "\n";

$i = 10;
do {
    $i++;
} while ($i < 10);
echo $i . "\n";