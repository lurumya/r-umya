<?php
require_once('../Utils/ft_errors.php');
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
    errorArgc();
    if (func_num_args() !== 1) {
        echo 'wrong number of function arguments !' . "\n";
        exit(-1);
    }
    errorTypeArgStr($country);
    if ($country === '') {
        echo 'Write a country please !' . "\n";
        exit(-1);
    }
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