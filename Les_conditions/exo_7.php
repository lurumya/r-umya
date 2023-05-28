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
// Le seul que j'ai vérifié car je m'attendais à une erreur car le = est dans une condition.

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
if ($i === '4') { // (j'ai ajouté '' sur 4 car je pense que c'est ce que tu voulais faire)
    echo 'Yes!';
} // vaut strictement donc n'affiche rien. C'est parfaitement logique mais je ne comprends pas vrt dans quelle situation 
// il convertit un type automatiquement et dans quel cas il ne le fait pas.
