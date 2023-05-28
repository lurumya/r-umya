<?php
/*
=====================================================================================
Page | numéro de l'exercice :

Description :

Explications :

Commentaires :

=====================================================================================
*/

function errorArgc() : int {
    global $argc;
    if ($argc !== 1) {
        echo 'wrong number of file arguments !' . "\n";
        exit(-1);
    }
    return 0;
}

function errorTypeArgInt($arg1, $arg2) : int {
    if (is_int($arg1) === false || is_int($arg2) === false) {
        echo 'Type not respected in function parameters !' . "\n";
        exit(-1);
    }
    return 0;
}

function errorTypeArgStr($arg) : int {
    if (is_string($arg) === false) {
        echo 'Type not respected in function parameters !' . "\n";
        exit(-1);
    }
    return 0;
}