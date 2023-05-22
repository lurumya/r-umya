<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.4 | exo 7

Description : 
- Qu’affichent les echos suivants ?

Explications :

Commentaires :

=====================================================================================
*/

$i = 4;
if ($i = 4) {
    echo 'Yes!';
} // est égal > Yes !
// Le seul que j'ai vérifié, je m'attendais à une erreur car le = est dans une condition. Mais c'est effectivement logique

$i = 4;
if ($i == 4) {
    echo 'Yes!';
} // vaut > Yes!

$i = 4;
if ($i === 4) {
    echo 'Yes!';
} // vaut strictement (meme type) > Yes! 

$i = '4';
if ($i == 4) {
    echo 'Yes!';
} // Yes! -> 4 est converti en integer

$i = 4;
if ($i === 4) {
    echo 'Yes!';
} // Yes! -> vaut strictement
