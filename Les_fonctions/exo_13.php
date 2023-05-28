<?php
require_once('../POO/Errorhandling.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.6 | exo 13

Description :
Ecrire une fonction qui prend en argument une string (nom de pays) 
et qui retourne la capitale de celui-ci, elle doit marcher pour la France, 
la Suisse, l’Allemagne et l’Italie, sinon elle doit retourner 
« Inconnu ». il faudra utiliser le switch.

Explications :

Commentaires :

=====================================================================================
*/

function getCapital($country) : string {
    Errorhandling::errorArgc();
    if (func_num_args() !== 1) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorTypeArgStr($country);
    Errorhandling::errorEmptyArg($country);
    $country = strtolower($country);
    switch ($country) {
        case $country === 'france':
            echo('La capitale de la France est Paris !' . "\n");
            break;
        case $country === 'suisse':
            echo('La capitale de la Suisse est Berne !' . "\n");
            break;
        case $country === 'allemagne':
            echo('La capitale de l\'Allemagne est Berlin !' . "\n");
            break;
        case $country === 'italie':
            echo('La capitale de l\'Italie est Rome !' . "\n");
            break;
        default:
            echo('Pays inconnu' . "\n");
            break;
    }
    return $country;
}

//getCapital('');
//getCapital('iTaLIE');